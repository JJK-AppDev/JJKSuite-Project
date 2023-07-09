<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toyyibpay;
use App\Models\Customer;
use App\Models\Room;
use App\Models\Payment;
use App\Helpers\Helper;
use App\Repositories\TransactionRepository;
use App\Models\Transaction;

class ToyyibpayController extends Controller
{
    public function getBankFPX()
    {
        $data = Toyyibpay::getBanksFPX();

        dd($data);

    }

    public function createFee(Request $request, $payment, Customer $customer, Room $room)
    {
        $price = $request->input('price');
        $payments = Payment::orderBy('id', 'DESC')->get();

        $code = config('toyyibpay.code');

        // Retrieve the transaction from the request or fetch it from the database
        $transactionId = $request->route('transaction');
        $transaction = Transaction::findOrFail($transactionId);

        $bill_object = [
            'billName' => 'Fee Hotel',
            'billDescription' => $transaction->room->number,
            'billPriceSetting' => 1,
            'billPayorInfo' => 1,
            'billAmount' => $price * 100,
            'billExternalReferenceNo' => $transaction->customer->name,
            'billTo' => $transaction->customer->name,
            'billEmail' => $transaction->customer->user->email,
            'billPhone' => '+60121212890',
            'billContentEmail'=>'Thank you for Booking our JJKSuite Hotel!',
        ];
        //dd($bill_object);

        $data = Toyyibpay::createBill($code, (object) $bill_object);

        $bill_code = $data[0]->BillCode;

        return redirect()->route('bill:payment', $bill_code);
    }



    public function billPaymentLink($bill_code)
    {
        //dd($bill_code);
        $data = Toyyibpay::billPaymentLink($bill_code);

        return redirect($data);
    }

}
