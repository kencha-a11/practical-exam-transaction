<h1>CREATE TRANSACTION</h1>
<hr>
<form action="{{ route('store') }}" method="POST">
    @csrf
    {{-- 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number', --}}
    <b>transaction_title: </b><input type="text" name="transaction_title" id="transaction_title" placeholder="enter transaction title" required> <br>
    <b>description: </b><input type="text" name="description" id="description" placeholder="enter description" required> <br>
    <b>status: </b> <label for="status1">successful</label>
            <input type="radio" name="status" id="status1" value="successful" required>
    
            <label for="status2">declined</label>
            <input type="radio" name="status" id="status2" value="declined" required> <br>
    
    <b>total_amount: </b> <input type="number" name="total_amount" id="total_amount" placeholder="enter total amount" required> <br>

    <button type="submit">create account</button>
</form>
