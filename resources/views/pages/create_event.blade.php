@extends('layouts.app')
@section('content')
        <div class="container">
            <a href="/events" class="btn-btn-success">Back to events page!</a>
        </div>
            {!! Form::open(['action'=>'EventsController@store','method'=>'POST']) !!}
                            <div class="container">
                                    <div class="form-group" style="width:600px;">
                                        {{Form::label('title','Title')}}
                                        {{Form::text('title','',['class' => 'form-control','placeholder'=>'Event Title'])}}
                                        {{Form::label('location','Location')}}
                                        {{Form::text('location','',['class' => 'form-control','placeholder'=>'Event Location'])}}
                                        {{Form::label('time','Time')}}
                                        {{Form::text('time','',['class' => 'form-control','placeholder'=>'Event Time'])}}
                                        {{Form::label('image','Image')}}
                                        {{Form::text('image','',['class' => 'form-control','placeholder'=>'Event Image Location'])}}
                                        {{Form::label('description','Description')}}
                                        {{Form::textarea('description','',['class' => 'form-control','placeholder'=>'Event description'])}}               
                                        {{Form::submit('submit', ['class' =>'btn btn-outline-primary'])}}
                                    </div>
                            </div>                
            {!! Form::close()!!}
@endsection
