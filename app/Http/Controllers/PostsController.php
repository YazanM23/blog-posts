<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class PostsController extends Controller
{
    //
    function getPosts()
    {
        $userID = Auth::user()->id;
        if ($userID) {
            $posts = Post::where('author_id', $userID)->get();
            return response()->json($posts, 200);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    function createPost(Request $request)
    {
        try {
            if (!$request->title || !$request->content) {
                return response()->json([
                    'error' => 'Title and Content are required'
                ], 404);
            }
            $userID = Auth::user()->id;

            if ($userID) {

                $post = new Post;

                $post->title = $request->title;
                $post->content = $request->content;
                $post->author_id = $userID;
                $post->save();
                return response()->json($post, 201);
            }
            return response()->json(['error' => 'Unauthorized'], 401);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 404);
        }
    }
    function updatePost(Request $request)
    {
        $userID = Auth::user()->id;
        Log::info($request);
        if ($userID) {
            $post = Post::where('id', $request->id)->first();
            if (!$post) {
                return response()->json(['error' => 'Post not found'], 404);
            }
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();
            return response()->json($post, 200);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
    function deletePost($id)
    {
        Log::info($id);
        $userID = Auth::user()->id;
        if ($userID) {

            $post = Post::where('id', $id)->first();
            if (!$post) {
                return response()->json(['error' => 'Post not found'], 404);
            }
            $post->delete();
            return response()->json($post, 204);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
