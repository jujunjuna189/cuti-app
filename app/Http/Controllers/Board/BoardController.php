<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        return view('pages.board.index');
    }
}
