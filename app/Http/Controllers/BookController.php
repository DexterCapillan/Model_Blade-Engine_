<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function get(){
        $books = DB::table('books')
        ->get();

        return view('welcome', compact('books'));
    }
}
