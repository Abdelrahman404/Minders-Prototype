@extends('layouts.app')
@section('content')
     
               <div class="table-responsive-sm my-table">
                <table class="table table-hover my-table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Faculty</th>
                            <th scope="col">Graduation</th>
                            <th scope="col my-col">FB URL</th>
                            <th scope="col">Reason</th>
                            <th scope="col">Knowledge</th>
                            <th scope="col">Skills</th>
                            <th scope="col">CV</th>
                            <th scope="col">Comments</th>
                          </tr>
                        </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                        @foreach ($FormData as $FormInfo)
                                        <tr>
                                                <th scope="row">@php echo ++$i ; @endphp</th>
                                                <td>{{$FormInfo->name}}</td>
                                                <td>{{$FormInfo->email}}</td>
                                                <td>{{$FormInfo->number}}</td>
                                                <td>{{$FormInfo->faculty}}</td>
                                                <td>{{$FormInfo->graduation_year}}</td>
                                                <td><a href="{{$FormInfo->facebook_url}}">URL</a></td>
                                                <td>{{$FormInfo->reason}}</td>
                                                <td>{{$FormInfo->knowledge}}</td>
                                                <td>{{$FormInfo->skills}}</td>
                                                <td><a href="{{$FormInfo->cv}}">URL</a></td>
                                                <td>{{$FormInfo->comments}}</td>        
                                        </tr>
            
                                        @endforeach
                                 </tbody>    
                          
                          
                        
                      </table>
                    </div>
                      
    
            <style>
            .my-col{
                word-wrap: break-word;
                
                   }
       
            .my-table{
                overflow:hidden;
                table-layout:fixed;
                word-wrap: break-word;

                 }
            .td{
                text-overflow: ellipsis;
                overflow: hidden;
            }
            </style>
@endsection

