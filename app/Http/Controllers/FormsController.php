<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['store','']] );
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $FormData = Form::all();
        return view('pages.form_responses')->with('FormData',$FormData);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
                'name' => 'required',
                'email' => 'required',
                'number' => 'required',
                'faculty' => 'required',
                'facebook_url' => 'required',
                'graduation_year' => 'required',
                'reason' => 'required',
                'knowledge' => 'required',
                'skills' => 'required',
                'cv' => 'required',
                'comment' => 'required'
        ]);

        $form = new Form();
        $form->name = $request->input('name');
        $form->email = $request->input('number');
        $form->number = $request->input('number');
        $form->faculty = $request->input('faculty');
        $form->graduation_year = $request->input('graduation_year');
        $form->facebook_url = $request->input('facebook_url');
        $form->reason = $request->input('reason');
        $form->knowledge = $request->input('knowledge');
        $form->skills = $request->input('skills');
        $form->cv = $request->input('cv');
        $form->comments = $request->input('comment');
        $form->save();

        return redirect('/available_forms')->with('success','Your form has been submmited successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
