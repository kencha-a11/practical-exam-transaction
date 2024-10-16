<h1>EDIT TRANSACTION</h1>
<hr>
<a href="{{route('index')}}">return transactions</a>
<form action="{{route('update', $account->id)}}" method="POST">
    @csrf
    @method('PUT')
    {{-- 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number', --}}
    <b>transaction_title: </b><input type="text" name="transaction_title" id="transaction_title" value="{{$account->transaction_title}}" required> <br>
    <b>description: </b><input type="text" name="description" id="description" value="{{$account->description}}" required> <br>
    <b>status: </b><label for="status1">successful</label>
            <input type="radio" name="status" id="status1" value="successful" required>
    
            <label for="status2">declined</label>
            <input type="radio" name="status" id="status2" value="declined" required> <br>
    
    <b>total_amount: </b><input type="number" name="total_amount" id="total_amount" value="{{$account->total_amount}}" required> <br>

    <button type="submit">update account</button>
</form>