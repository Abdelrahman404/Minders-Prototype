@extends('layouts.app')
@section('content')
             <div class="container">
                <a href="/events" class="btn-btn-success">Back to events page!</a>
             </div>
                {!! Form::open(['action'=>['EventsController@update', $EventInfo->id],'method'=>'POST']) !!}
                                <div class="container">
                                        <div class="form-group" style="width:600px;">
                                            {{Form::label('title','Title')}}
                                            {{Form::text('title',$EventInfo->title,['class' => 'form-control','placeholder'=>'Event Title'])}}
                                            {{Form::label('location','Location')}}
                                            {{Form::text('location',$EventInfo->location,['class' => 'form-control','placeholder'=>'Event Location'])}}
                                            {{Form::label('time','Time')}}
                                            {{Form::text('time',$EventInfo->time,['class' => 'form-control','placeholder'=>'Event Time'])}}
                                            {{Form::label('image','Image')}}
                                            {{Form::text('image',$EventInfo->image,['class' => 'form-control','placeholder'=>'Event Image Location'])}}
                                            {{Form::label('description','Description')}}
                                            {{Form::textarea('description',$EventInfo->body,['class' => 'form-control','placeholder'=>'Event description'])}}
                                            
                                            {{Form::hidden('_method','PUT')}}
                                            {{Form::submit('submit', ['class' =>'btn btn-success'])}}
                                        </div>
                                </div>                
                {!! Form::close()!!}
@endsection
