<h1>EDIT</h1>
<hr>

<form action="{{route('update', $account->id)}}" method="POST">
    @csrf
    @method('PUT')
    {{-- 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number', --}}
    transaction_title:<input type="text" name="transaction_title" id="transaction_title" value="{{$account->transaction_title}}" required> <br>
    description:<input type="text" name="description" id="description" value="{{$account->description}}" required> <br>
    status: <label for="status1">successful</label>
            <input type="radio" name="status" id="status1" value="successful" required>
    
            <label for="status2">declined</label>
            <input type="radio" name="status" id="status2" value="declined" required> <br>
    
    total_amount: <input type="number" name="total_amount" id="total_amount" value="{{$account->total_amount}}" required> <br>
    transaction_number: <input type="number" name="transaction_number" id="transaction_number" value="{{$account->transaction_number}}" required> <br>

    <button type="submit">update account</button>
</form>