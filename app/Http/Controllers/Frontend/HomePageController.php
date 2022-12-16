<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class HomePageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function blog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('frontend.blog', compact('blog'));
    }
}
