<?php
// Controller

namespace App\Http\Controllers;

use App\Events\NewReservationEvent;
use App\Events\RefreshDashboardEvent;
use App\Helpers\Helper;
use App\Http\Requests\ChooseRoomRequest;
use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use App\Models\Room;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\NewRoomReservationDownPayment;
use App\Repositories\CustomerRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\ReservationRepository;
use App\Repositories\TransactionRepository;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Exception;

class CustTransactionRoomReservationController extends Controller
{
    private $reservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function edit(Customer $customer)
    {
        return view('transaction.reservation.cust.edit', compact('customer'));
    }


    public function updateCustomer(StoreCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        return redirect()->route('transaction.reservation.cust.viewCountPerson', ['customer' => $customer->id])->with('success', 'Customer updated successfully!');
    }


    public function storeCustomer(StoreCustomerRequest $request, CustomerRepository $customerRepository)
    {
        $customer = $customerRepository->store($request);
        return redirect()->route('transaction.reservation.viewCountPerson', ['customer' => $customer->id])->with('success', 'Customer ' . $customer->name . ' created!');
    }

    public function viewCountPerson(Customer $customer)
    {
        return view('transaction.reservation.cust.viewCountPerson', ['customer' => $customer]);
    }

    public function chooseRoom(ChooseRoomRequest $request, Customer $customer)
    {

        $stayFrom = $request->check_in;
        $stayUntil = $request->check_out;

        $occupiedRoomId = $this->getOccupiedRoomID($request->check_in, $request->check_out);

        $rooms = $this->reservationRepository->getUnocuppiedroom($request, $occupiedRoomId);
        $roomsCount = $this->reservationRepository->countUnocuppiedroom($request, $occupiedRoomId);

        return view('transaction.reservation.cust.chooseRoom', compact('customer', 'rooms', 'stayFrom', 'stayUntil', 'roomsCount'));
    }

    public function confirmation(Customer $customer, Room $room, $stayFrom, $stayUntil)
    {
        $price = $room->price;
        $dayDifference = Helper::getDateDifference($stayFrom, $stayUntil);
        $downPayment = ($price * $dayDifference) * 0.15;
        return view('transaction.reservation.cust.confirmation', compact('customer', 'room', 'stayFrom', 'stayUntil', 'downPayment', 'dayDifference'));
    }

    public function payDownPayment(Customer $customer, Room $room, Request $request, TransactionRepository $transactionRepository, PaymentRepository $paymentRepository)
    {
        $dayDifference = Helper::getDateDifference($request->check_in, $request->check_out);
        $minimumDownPayment = ($room->price * $dayDifference) * 0.15;

        $request->validate([
            'downPayment' => 'required|numeric|gte:' . $minimumDownPayment
        ]);

        $minimumDownPayment = ($room->price * $dayDifference);
        $request->validate([
            'downPayment' => 'required|numeric|lte:' . $minimumDownPayment
        ]);

        $occupiedRoomId = $this->getOccupiedRoomID($request->check_in, $request->check_out);
        $occupiedRoomIdInArray = $occupiedRoomId->toArray();

        if (in_array($room->id, $occupiedRoomIdInArray)) {
            return redirect()->back()->with('failed', 'Sorry, room ' . $room->number . ' already occupied');
        }

        $transaction = $transactionRepository->store($request, $customer, $room);
        $status = 'Down Payment';
        $payment = $paymentRepository->store($request, $transaction, $status);

        $superAdmins = User::where('role', 'Super')->get();

        /*foreach ($superAdmins as $superAdmin) {
            $message = 'Reservation added by ' . $customer->name;
            event(new NewReservationEvent($message, $superAdmin));
            $superAdmin->notify(new NewRoomReservationDownPayment($transaction, $payment));
        }

        event(new RefreshDashboardEvent("Someone reserved a room"));

        return redirect()->route('transaction.index')->with('success', 'Room ' . $room->number . ' has been reservated by ' . $customer->name);*/

        $price = $payment->price;
        //dd($price);
        return redirect()->route('create:fee', ['transaction' => $transaction, 'price' => $price]);

    }

    private function getOccupiedRoomID($stayFrom, $stayUntil)
    {
        $occupiedRoomId = Transaction::where([['check_in', '<=', $stayFrom], ['check_out', '>=', $stayUntil]])
            ->orWhere([['check_in', '>=', $stayFrom], ['check_in', '<=', $stayUntil]])
            ->orWhere([['check_out', '>=', $stayFrom], ['check_out', '<=', $stayUntil]])
            ->pluck('room_id');
        return $occupiedRoomId;
    }
}
