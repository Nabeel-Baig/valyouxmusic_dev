<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BankControllerRequest;
use Illuminate\Http\Request;
use App\User;

class BankController extends Controller
{
    public function index()
    {
        $users = User::select('id','email')->where('id','<>',auth()->user()->id)->get()->pluck('email','id');
        return view('bank.crypto-wallet',compact('users'));
    }

    public function deposit(BankControllerRequest $request)
    {
        $wallet = auth()->user()->wallet;
        if ((float)$wallet > (float)$request->wallet) {
            User::whereId(auth()->user()->id)->update(['wallet' => (float)$wallet - (float)$request->wallet]);
            $userWallet = User::whereId($request->user_id)->select('wallet')->first()->wallet;
            User::whereId($request->user_id)->update(['wallet' => (float)$userWallet + (float)$request->wallet]);
            session()->flash('success',"Transfered Successfully.");
            return response()->json(['status' => 'success']);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => "You do not have enough money to deposit to this account."
                ]);
        }

    }
}
