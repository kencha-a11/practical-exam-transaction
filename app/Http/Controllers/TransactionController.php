<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $accounts = Transaction::orderBy('updated_at', 'desc')->get();
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
            'status'=>'required|in:successful,declined',
            'total_amount' => 'required|numeric',
        ]);

        $account = new Transaction();
        $account->transaction_title = $validatedData['transaction_title'];
        $account->description = $validatedData['description'];
        $account->status = $validatedData['status'];
        $account->total_amount = $validatedData['total_amount'];
        $account->transaction_number = rand(0000000,9999999);
        $account->save();
        
        // Useraccount::create($validatedData);

        return redirect()->route('index')->with('success', 'successfull account creation');
    }

    public function show(Request $request) {
        $account = Transaction::findOrFail($request->id);
        return view('show',['account'=>$account]);
    }

    public function edit(Request $request){
        $account = Transaction::findOrFail($request->id);
        return view('edit', ['account'=>$account]);
    }

    public function update(Request $request, Transaction $account){
        $account = Transaction::findOrFail($request->id);

        $validateData = $request->validate([
            // 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number',
            'transaction_title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'status'=>'required|in:successful,declined',
            'total_amount' => 'required|numeric',
        ]);

        $account->transaction_title = $validateData['transaction_title'];
        $account->description = $validateData['description'];
        $account->status = $validateData['status'];
        $account->total_amount = $validateData['total_amount'];
        $account->save();

        return redirect()->route('index')->with('success', 'successfully update account');
    }

    public function destroy(Request $request){
        $account = Transaction::findOrFail($request->id);

        $account->delete();
        return redirect()->route('index')->with('success','successful delete account');
    }
}
