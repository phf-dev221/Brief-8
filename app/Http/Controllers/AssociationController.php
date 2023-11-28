<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('association.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $assoc= new Association();
        $request->validate([
            'nom'=>'required|min:2|max:20 ',
            'date_creation'=>'required |min:2|max:20',
            'slogan'=>'required',
            'logo'=>'required|image|max:1000',
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $assoc->nom=$request->nom;
        $assoc->date_creation=$request->date_creation;
        $assoc->slogan=$request->slogan;
        $assoc->email=$request->email;
        $assoc->password=Hash::make($request->password);

        if($request->file('logo')){
            $file= $request->file('logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/logoAssoc'), $filename);
            $assoc['logo']= $filename;
        }

        $assoc->save();
       // return 'good';
        return view('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
