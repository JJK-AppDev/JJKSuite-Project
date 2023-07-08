<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreRoomRequest;
use App\Models\CustRoom;
use App\Models\RoomStatus;
use App\Models\Transaction;
use App\Models\Type;
use App\Repositories\ImageRepository;
use App\Repositories\RoomRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;




class CustRoomController extends Controller
{
   
    private $roomRepository;

    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function roomindex(Request $request){
        
       
        // $rooms = $this->roomRepository->getCustRoomsDatatable($request);

        //  return view('customer.roomindex', compact('rooms'));

        $rooms = CustRoom::all(); // Fetch all rooms from the database
        return view('customer.roomindex', compact('rooms'));
        
        // return view('customer.roomindex', compact('rooms')); // Pass the rooms to the view
        // $results = CustRoom::all();
        // if ($request->ajax()) {
        //     return $this->roomRepository->getCustRoomsDatatable($request);
        // }
        // return view('customer.roomindex');
    }

    // public function roomshow(CustRoom $room)
    // {
    //     $customer = [];
    //     $transaction = Transaction::where([['check_in', '<=', Carbon::now()], ['check_out', '>=', Carbon::now()], ['room_id', $room->id]])->first();
    //     if (!empty($transaction)) {
    //         $customer = $transaction->customer;
    //     }
    //     return view('customer.roomindex', compact('customer', 'room'));

       
    // }
}
