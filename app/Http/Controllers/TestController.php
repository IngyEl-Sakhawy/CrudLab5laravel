<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return "<ul><li><a href=" . route('posts.index') . ">Posts List</a></li>
        <li><a href=" . route('posts.show', ['id' => 1]) . ">Posts Show for id = 1</a></li></ul>";
    }
}
