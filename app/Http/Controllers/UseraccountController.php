<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Useraccount;

class UseraccountController extends Controller
{
    public function index()
    {
        $accounts = Useraccount::all();
        return view('index', ['accounts'=>$accounts]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            // 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number',
            'transaction_title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'status'=>'required|in:active,inactive',
            'total_amount' => 'required|numeric',
            'transaction_number'=>'required|integer',
        ]);

        // $account = new Useraccount();
        // $account->transaction_title = $validatedData['transaction_title'];
        // $account->description = $validatedData['description'];
        // $account->status = $validatedData['status'];
        // $account->total_amount = $validatedData['total_amount'];
        // $account->transaction_number = $validatedData['transaction_number'];
        // $account->save();
        Useraccount::create($validatedData);

        return redirect()->route('index')->with('success', 'successfull account creation');
    }

    public function show(Request $request) {
        $account = Useraccount::findOrFail($request->id);
        return view('show',['account'=>$account]);
    }

    public function edit(Request $request){
        $account = Useraccount::findOrFail($request->id);
        return view('edit', ['account'=>$account]);
    }

    public function update(Request $request, Useraccount $account){
        $account = Useraccount::findOrFail($request->id);

        $validateData = $request->validate([
            // 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number',
            'transaction_title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'status'=>'required|in:active,inactive',
            'total_amount' => 'required|numeric',
            'transaction_number'=>'required|integer',
        ]);

        $account->transaction_title = $validateData['transaction_title'];
        $account->description = $validateData['description'];
        $account->status = $validateData['status'];
        $account->total_amount = $validateData['total_amount'];
        $account->transaction_number = $validateData['transaction_number'];
        $account->save();

        return redirect()->route('index')->with('success', 'successfully update account');
    }

    public function destroy(Request $request){
        $account = Useraccount::findOrFail($request->id);

        $account->delete();
        return redirect()->route('index')->with('success','successful delete account');
    }
}
