<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::all();
        return view('contacts.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'correo'=>'required',
            'telefono'=>'required'
        ]);
        $contact=new Contact([
            'nombres'=>$request->get('nombres'),
            'apellidos'=>$request->get('apellidos'),
            'correo'=>$request->get('correo'),
            'telefono'=>$request->get('telefono')
        ]);
        $contact->save();
        return redirect('/contacts')->with('success','Producto registrado');
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
        $contact=Contact::find($id);
        return view('contacts.edit',compact('contact'));
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
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'correo'=> 'required',
            'telefono'=>'required'
        ]);
        $contact= Contact::find($id);
        $contact->nombres=$request->get('nombres');
        $contact->apellidos=$request->get('apellidos');
        $contact->correo=$request->get('correo');
        $contact->telefono=$request->get('telefono');
        $contact->save();
        return redirect('/contacts')->with('success','Producto Actualizado');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=Contact::find($id);
        $contact->delete();
        return redirect('/contacts')->with('success','Producto Eliminado');
    }
}
