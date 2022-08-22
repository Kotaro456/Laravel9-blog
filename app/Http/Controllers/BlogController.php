<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::where('user_id',Auth::id())->get();

        return view('admin.index', ['blogs' => $blogs]);
    }

    /**
     * @param Request $request
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => $user->id,
        ]);

        return redirect()->route('admin.index');
    }
}
