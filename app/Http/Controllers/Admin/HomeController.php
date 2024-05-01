<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $postsCount = Post::count();
        return view('admin.home.index', [
            'postsCount' => $postsCount
        ]);
    }
}
