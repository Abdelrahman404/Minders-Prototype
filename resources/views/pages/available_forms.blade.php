@extends('layouts.app')
@section('content') 
                    {!! Form::open(['action'=>'FormsController@store','method'=>'POST']) !!}
                    <div class="container">
                            <div class="form-group" style="width:600px;">
                                <h2> Minders19 - Web Design Workshop</h2>

                                {{Form::label('name','Full Name')}}
                                {{Form::text('name','',['class' => 'form-control','placeholder'=>'Your answer'])}}

                                {{Form::label('email','Email')}}
                                {{Form::text('email','',['class' => 'form-control','placeholder'=>'Your answer'])}}

                                {{Form::label('number','Phone Number')}}
                                {{Form::text('number','',['class' => 'form-control','placeholder'=>'Your answer'])}}

                                {{Form::label('faculty','Faculty')}}
                                {{Form::text('faculty','',['class' => 'form-control','placeholder'=>'Your Answer'])}}

                                {{Form::label('facebook_url','Facebook URL')}}
                                {{Form::text('facebook_url','',['class' => 'form-control','placeholder'=>'Your answer'])}}
                                
                                {{Form::label('graduation_year','Level (If graduated Enter Year of graduation in the other field)')}}
                                {{Form::select('graduation_year', ['1' => 'Level 1', '2' => 'Level 2' , '3' => 'Level 3' , '4' => 'Level 4' , '5' => 'Level 5' , 'graduated' => 'Graduted..'] , '1' , ['class' => 'form-control'])}}
                        
                                {{Form::label('reason','Why do you want to attend this workshop?')}}
                                {{Form::text('reason','',['class' => 'form-control','placeholder'=>'Your answer'])}}

                                {{Form::label('knowledge','What do you know about web design?')}}
                                {{Form::text('knowledge','',['class' => 'form-control','placeholder'=>'Your answer'])}}

                                {{Form::label('skills','Please rate yourself in communication skills')}}
                                {{Form::select('skills', ['1' => '1', '2' => '2' , '3' => '3' , '4' => '4' , '5' => '5'] , '1' , ['class' => 'form-control'])}}

                                {{Form::label('cv','Upload your CV to google drive and put the link here (optional)')}}
                                {{Form::text('cv','',['class' => 'form-control','placeholder'=>'Your answer'])}}

                                {{Form::label('comment',' Any questions or comments?')}}
                                {{Form::text('comment','',['class' => 'form-control','placeholder'=>'Your answer'])}}

                                
                                {{Form::submit('submit', ['class' =>'btn btn-success'])}}
                                
                            </div>
                    </div>                
                    {!! Form::close()!!}

@endsection