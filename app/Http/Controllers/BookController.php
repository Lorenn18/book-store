<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Images;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('updated_at', 'desc')->paginate(10);
        // dd($books);
        return view('pages.home', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Book $books)
    {
        return view('pages.create', compact('books'));
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
        'title' => 'required|min:5|string|max:180|unique:books,title',
        'description' => 'required|min:20|max:2000|string',
        'image' => 'required|image|mimes:png,jpg,jpeg|max:2000',
        'author' => 'required',
        'price' => 'required',
        'nombre_pages' => 'required'
         ]);

        $validateImg = $request->file('image')->store('books');

        Book::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $validateImg,
        'author' => $request->author,
        'price' => $request->price,
        'nombre_pages' => $request->nombre_pages,
        'created_at' => now()]);

        return redirect()->route('pages.home')->with('status', 'Livre enregistrer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
     return view('pages.show', compact('book'));
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
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()
            ->route('pages.home')
            ->with('status', "L'article a bien été supprimé");
    }
}
