<h1>VIEW TRANSACTION</h1>
<hr>
    {{-- 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number', --}}
    id:{{$account->id}} <br>
    transaction_title: {{$account->transaction_title}} <br>
    description:{{$account->description}} <br>
    status:{{$account->status}} <br>
    total_amount:{{$account->total_amount}} <br>
    transaction_number:{{$account->transaction_number}} <br>
    created_at:{{$account->created_at}} <br>
    updated_at:{{$account->updated_at}} <br>

    <a href="{{route('index')}}">return index</a>