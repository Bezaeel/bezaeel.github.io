<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\phonebook;

class info extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        //
        $user = phonebook::all();
        return view("phonebook", compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        phonebook::create(Request::all());

        return redirect('phonebook');   
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
        $user = phonebook::find($id);
        return view('details', compact('user'));
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
        $user = phonebook::find($id);
        return view('update', compact('user'));
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
        $user = phonebook::findorFail($id);
        $user->update(Request::all());
        return redirect('phonebook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // GET
    public function destroy($id)
    {
        //
        $user = phonebook::find($id);
        return view('delete', compact('user'));
    }


    // POST

    public function destroyConfirmed($id)
    {
        //
        $user = phonebook::find($id);
        $user->delete();
        return redirect('phonebook');
    }
}
