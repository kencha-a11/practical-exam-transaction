<h1>VIEW TRANSACTION</h1>
<hr>
    {{-- 'transaction_title', 'description', 'status', 'total_amount', 'transaction_number', --}}
 <b>id:</b>{{$account->id}} <br>
 <b>transaction_title:</b>{{$account->transaction_title}} <br>
 <b>description:</b>{{$account->description}} <br>
 <b>status:</b>{{$account->status}} <br>
 <b>total_amount:</b>{{$account->total_amount}} <br>
 <b>transaction_number:</b>{{$account->transaction_number}} <br>
 <b>created_at:</b>{{$account->created_at}} <br>
 <b>updated_at:</b>{{$account->updated_at}} <br>

    <a href="{{route('index')}}">return index</a>