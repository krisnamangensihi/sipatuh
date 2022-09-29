<?php

namespace App\Http\Controllers;

use App\Models\Verivikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifikasikeamananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'document' => 'required',
        ]);
            $document=$request->file('document')->store('file_keamanan');
        if($request->file('document')){
            $document;
        }
             $query=Verivikasi::select()->get()->count();
             $id=$query+1;
            Verivikasi::create([
                    'Kepemimpinan_id'=>$id,
                    'user_id'=>Auth::user()->id,
                    'name'=>$request->name,
                    'nip'=>$request->nip,
                    'document'=>$document,  
            ]);
            return back();
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
