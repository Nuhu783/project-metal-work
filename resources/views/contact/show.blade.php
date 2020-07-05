@extends('coach.app')
@section('content')
<div class="container">
<div class="card">
        <h3>{{$contact->name}}</h3>
        <h3>{{$contact->email}}</h3>
        <h3>{{$contact->phone}}</h3>
        <h3>{{$contact->subject}}</h3>
        <h3>{{$contact->message}}</h3>
</div>
</div>
@stop