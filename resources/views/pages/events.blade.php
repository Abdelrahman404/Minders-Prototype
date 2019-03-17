@extends('layouts.app')
@section('content')
                <br>
                <br>
        <div class="container" >
            <div class="row">
                    @foreach ($EventsInfo as $EventInfo)
                            <div class="col-md-6 col-sm-12">
                            <img src="{{$EventInfo->image}}" alt="" style="width:300px; height:200px;">
                            <h3><a href="/events/{{$EventInfo->id}}">{{$EventInfo->title}}</a></h3>
                                    <p class="small">{{$EventInfo->location}}</p>
                                    <p class="small">{{$EventInfo->time}}</p>
                                    <p>{{$EventInfo->body}}</p>
                                @can('isIT')
                                        <a href="/events/{{$EventInfo->id}}/edit" class="btn btn-success">Edit</a>
                                        {!!Form::open(['action' => ['EventsController@destroy', $EventInfo->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}  
                                @endcan
  
                         </div>
                    @endforeach
            </div>
        </div>
@endsection