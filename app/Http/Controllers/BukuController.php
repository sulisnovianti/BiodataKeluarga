<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;
use App\author;
use file;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buku = Buku::all();
        return view('buku.index',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          $author = Author::all();
         return view('buku.create',compact('author'));
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
          $buku = new Buku;
        $buku->title = $request->a;
        $buku->author_id = $request->b;
        $buku->amount = $request->c;

        if ($request->hasFile('cover')) {
           $bukus = $request->file('cover');
           $extension = $bukus->getClientOriginalExtension();
           $filename = str_random(6). '.' . $extension;
           $destinationPath = public_path() .
           DIRECTORY_SEPARATOR . 'img';
           $bukus->move($destinationPath, $filename);
           $buku->cover = $filename;
        }
        
        $buku->save();
        return redirect('buku');
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
         $buku = Buku::findOrFail($id);
         $author = Author::all();
        return view('buku.show',compact('buku','author'));
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
       $buku = Buku::findOrFail($id);
         $author = Author::all();
        return view('buku.edit',compact('buku','author')); 
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
        $buku = Buku::findOrFail($id);
        
        $buku->title = $request->a;
        $buku->author_id = $request->b;
        $buku->amount = $request->c;

        if ($request->hasFile('cover')) {
           $bukus = $request->file('cover');
           $extension = $bukus->getClientOriginalExtension();
           $filename = str_random(6). '.' . $extension;
           $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
           $bukus->move($destinationPath, $filename);
           $buku->cover = $filename;
        }
          $buku->save();
        return redirect('buku');
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
        $buku = buku::findOrFail($id);
        $buku->delete();
        return redirect('buku'); 
    }
    }

