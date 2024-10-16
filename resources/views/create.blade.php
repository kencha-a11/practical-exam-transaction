<h1>CREATE</h1>
<hr>
<form action="{{ route('store') }}" method="POST">
    @csrf
    {{-- 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number', --}}
    transaction_title:<input type="text" name="transaction_title" id="transaction_title" placeholder="enter transaction title" required> <br>
    description:<input type="text" name="description" id="description" placeholder="enter description" required> <br>
    status: <label for="status1">active</label>
            <input type="radio" name="status" id="status1" value="active" required>
    
            <label for="status2">inactive</label>
            <input type="radio" name="status" id="status2" value="inactive" required> <br>
    
    total_amount: <input type="number" name="total_amount" id="total_amount" placeholder="enter total amount" required> <br>
    transaction_number: <input type="number" name="transaction_number" id="transaction_number" placeholder="enter transaction number" required> <br>

    <button type="submit">create account</button>
</form>
