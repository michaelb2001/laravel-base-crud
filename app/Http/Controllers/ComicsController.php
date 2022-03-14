<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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
            "title"=>"required|string|max:100|unique:comics",
            "description"=>"required|string|unique:comics",
            "thumb"=>"string|max:255|url",
            "price"=>"required|between:0,99.99",
            "series"=>"required|string|max:50",
            "sale_date"=>"required|string|min:11|max:11",
            "type"=>"required|string|max:50"
        ]);
        //prendo i dati dalla form
       $data = $request->all();

       //inserisco un nuovo record
       $newComic = new Comic();
       /*$newComic->title = $data['title'];
       $newComic->description = $data['description'];
       $newComic->thumb = $data['thumb'];
       $newComic->price = $data['price'];
       $newComic->series = $data['series'];
       $newComic->sale_date = $data['sale_date'];
       $newComic->type = $data['type'];*/
       $newComic->fill($data);
       $newComic->save();

       return redirect()->route('comics.show',$newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {               
        //$comic = Comics::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comic $comic)
    {
        $request->validate([
            "title"=>"required|string|max:100|",
            "description"=>"required|string|",
            "thumb"=>"string|max:255|url",
            "price"=>"required|between:0,99.99",
            "series"=>"required|string|max:50",
            "sale_date"=>"required|string|min:10|max:10",
            "type"=>"required|string|max:50"
        ]);
       $data = $request->all();

       $comic->title = $data['title'];
       $comic->description = $data['description'];
       $comic->thumb = $data['thumb'];
       $comic->price = $data['price'];
       $comic->series = $data['series'];
       $comic->sale_date = $data['sale_date'];
       $comic->type = $data['type'];
       $comic->save();

       return redirect()->route('comics.show',$comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}
