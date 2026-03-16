<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Services\PostService;

class PostController extends Controller
{
    /**
     * Return View
     */
    public function index(PostService $service)
    {
            $posts = $service->getPosts();
        return view('posts.index', compact('posts'));
    }

    /**
     * Return View (form page)
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Redirect Response
     */
    public function store(Request $request)
    {
        $name = $request->name;

        return redirect('/posts')
            ->with('success', 'Post created');
    }

    /**
     * Return JSON
     */
    public function jsonResponse()
    {
        return response()->json([
            'posts' => ['Quote', 'Comedy', 'News']
        ]);
    }

    /**
     * Return View (edit page)
     */
    public function edit(string $id)
    {
        return view('posts.edit', compact('id'));
    }

    /**
     * Redirect Response
     */
    public function update(Request $request, string $id)
    {
        return redirect('/posts')
            ->with('success', 'Post updated');
    }

    /**
     * Redirect Response
     */
    public function destroy(string $id)
    {
        return redirect('/posts')
            ->with('success', 'Post deleted');
    }

    /**
     * Download File
     */
    public function download()
    {
        return response()->download(public_path('sample.txt'));
    }

    /**
     * Custom Response Macro Example
     */
    public function macroExample()
    {
        return response::success([
            'message' => 'Custom macro response'
        ]);
    }
}