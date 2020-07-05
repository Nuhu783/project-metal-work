@extends('coach.app')
@section('content')
<div class="container">
    <div>
    <a href="{{route('show.form')}}" class="btn btn-info">Create</a>
</div>
    <div class="jumbotron">
    
     
    <div>
        @foreach($contacts as $contacts)
        <h3>{{$contacts->name}}</h3>
        <h3>{{$contacts->email}}</h3>
        <h3>{{$contacts->phone}}</h3>
        <h3>{{$contacts->subject}}</h3>
        <h3>{{$contacts->message}}</h3>
        <div class="">
           <a class="btn btn-xs btn-info" href="{{ route('show', $contacts->id)
            }}">Show</a>
           
           <form action="{{route('delete', $contacts->id)}}" method="post">
            @csrf
            {{ method_field('DELETE')}}
            <button class="btn btn-danger">Delete</button>
               
           </form>
        </div>
    @endforeach
    </div>
        
    </div>
</div>
@stop