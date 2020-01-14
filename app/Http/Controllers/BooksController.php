<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Books;
use Carbon\Carbon;

class BooksController extends Controller
{
    public function index(){
        $book = Books::all();
        return $book;
    }

    public function create($judul){
        $book = new Books();
        $book->title = $judul;
        $book->publisher = "Assalaam Studio";
        $book->pages = 100;
        $book->date = Carbon::now();
        $book->price = 1500000;
        $book->status = false;
        $book->synopsis = "Lorem Ipsum";
        $book->save();
        return $book;
    }

    public function show($id){
        $book = Books::find($id);
        return $book;
    }

    public function edit($id,$judul){
        $book = Books::find($id);
        $book->title = $judul;
        $book->publisher = "Assalaam Studio";
        $book->pages = 100;
        $book->date = Carbon::now();
        $book->price = 1500000;
        $book->status = false;
        $book->synopsis = "Lorem Ipsum";
        $book->save();
        return $book;
    }

    public function delete($id){
        $book = Books::find($id);
        $book->delete();
        return $book;
    }

    public function koy(){
        $book = Books::select('title','publisher','pages','price')->take(3)->get();
        return $book;
    }

}
