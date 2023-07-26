<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use Spatie\FlareClient\View;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicsList= Comic::all();
        return view('admin.comics.index', compact('comicsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        
        $newComic=new Comic();
        $newComic->title=$data['title'];
        $newComic->thumb=$data['thumb'];
        $newComic->description=$data['description'];
        $newComic->type=$data['type'];
        $newComic->price=$data['price'];
        $newComic->series=$data['series'];
        $newComic->sale_date=$data['sale_date'];
        $newComic->save();

        return redirect()->route('admin.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic= Comic::findOrFail($id);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic= Comic::findOrFail($id);
        return view('admin.comics.edit', compact('comic'));
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
        $data= $request->all();

        $comic= Comic::findOrFail($id);

        $comic->title=$data['title'];
        $comic->thumb=$data['thumb'];
        $comic->description=$data['description'];
        $comic->type=$data['type'];
        $comic->price=$data['price'];
        $comic->series=$data['series'];
        $comic->sale_date=$data['sale_date'];
        $comic->save();

        return redirect()->route('admin.comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic= Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('admin.comics.index');
        
    }
}
