<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;

class PagesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('created_at', 'desc')->paginate(3);
        $offers = $books;
        return view('home', ['books' => $books, 'offers' => $offers]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('layouts.about');
    }

    /**
     * Show the inventory.
     *
     * @return \Illuminate\Http\Response
     */
    public function inventory()
    {
        $books = Book::orderBy('created_at', 'desc')->paginate(3);
        return view('layouts.inventory')->with('books', $books);
    }
}
