<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Validator;


class BookController extends Controller
{
 
    public function index()
    {
        $book = Book::all()->toArray();
        //return response()->json(['book'=> $book]);
        return array_reverse($book);     
    }

 
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'isbn'=>'required',
            'authors'=>'required',
            'number_of_pages'=>'required',
            'publisher'=>'required',
            'country'=>'required',
            'release_date'=>'required|date_format:Y-m-d'
        ]);


        $book = new Book;
        $book->name = $request->name;
        $book->isbn = $request->isbn;
        $book->authors = $request->authors;
        $book->number_of_pages = $request->number_of_pages;
        $book->publisher = $request->publisher;
        $book->country = $request->country;
        $book->release_date = $request->release_date;
        $book->save();
        return response()->json(['message' => 'Books successfully Added'], 200);
    }


    public function show($id)
    {
        $book = Book::find($id);
        if($book)
        {
        return response()->json(['book' => $book], 200);
        }
        else{
            $data = 'Book Not Found';
            return response()->json($data, 200);
        }
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {

              $request->validate([
            'name'=>'required',
            'isbn'=>'required',
            'authors'=>'required',
            'number_of_pages'=>'required',
            'publisher'=>'required',
            'country'=>'required',
            'release_date'=>'required|date_format:Y-m-d'
        ]);


        $book = Book::find($id);
        if($book)
        {
            $book->name = $request->name;
            $book->isbn = $request->isbn;
            $book->authors = $request->authors;
            $book->number_of_pages = $request->number_of_pages;
            $book->publisher = $request->publisher;
            $book->country = $request->country;
            $book->release_date = $request->release_date;
            $book->update();
            return response()->json(['message' => 'The book My First Book was updated successfully'], 200);  
        }
        else{

            return response()->json(['message' => 'Books Not Found'], 404);  

        }
    }

 
    public function destroy($id)
    {
        
         $book = Book::find($id);
         $book->delete();
         $data = 'Delete Successful';
         return response()->json($data, 200);
    }
}









