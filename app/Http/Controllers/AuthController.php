<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests\PostLoginRequest;
use App\Http\Requests\PostRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;


class AuthController extends Controller
{
    //postLogin
    public function postLogin(PostLoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = auth()->user();
            if ($user) {
                $roles = $user->role;
                if ($roles === 'Admin' || $roles === 'Super') {
                    return redirect('dashboard')->with('success', 'Welcome, ' . Str::title($user->name) . '! We are glad to have you here. Make yourself at home. ~ JJKSuite');
                } elseif ($roles === 'Customer') {
                    $customer = Customer::where('user_id', $user->id)->first();
                    return redirect()->route('transaction.reservation.cust.edit', ['customer' => $customer])->with('success', 'Welcome, ' . Str::title($user->name) . '! We are glad to have you here. Make yourself at home. ~ JJKSuite');
                }
            }
        }

        return redirect('login')->with('failed', 'Please check your email and password!');
    }


    //postRegister
    public function postRegister(PostRegisterRequest $request)
   {
       $validatedData = $request->validated();

       $user = new User();
       $user->name = $validatedData['name'];
       $user->email = $validatedData['email'];
       $user->password = Hash::make($validatedData['password']);
       $user->random_key = Str::random(); // Generate a random key
       $user->role = 'Customer'; // Set default role as 'Customer
       $user->save();

       // Corresponding record is also created in the customer table
       $customer = new Customer();
       $customer->user_id = $user->id;
       // Set additional customer data
       $customer->name = $validatedData['name'];
       $customer->save();

       return redirect('login')->with('success', 'Registration successful. Welcome, ' . Str::title($user->name) . '!');
   }

    //logout
    public function logout(Request $request)
    {
        $name = Auth::user()->name;
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout successful. We hope to see you again, ' . ucwords($name));
    }
}
