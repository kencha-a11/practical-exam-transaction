<h1>INDEX</h1>
<hr>
<a href="{{route('create')}}">create account</a>
<hr>
@foreach ($accounts as $account)
{{-- 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number', --}}
<b>transaction_title: </b>{{$account->transaction_title}} <br>
<b>description: </b>{{$account->description}} <br>
<b>status: </b>{{$account->status}} <br>
<b>total_amount: </b>{{$account->total_amount}} <br>
<b>transaction_number: </b>{{$account->transaction_number}} <br>

<a href="{{route('show', $account->id)}}">view account</a> <br>
<a href="{{route('edit', $account->id)}}">edit account</a> <br>

<form action="{{route('delete', $account->id)}}" method="POST" onclick="return confirm('delete account!')">
    @csrf
    @method('DELETE')
    <button type="submit">delete account</button>
</form>

<hr>
@endforeach