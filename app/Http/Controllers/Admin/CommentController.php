<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        // Fetch paginated comments with their associated blogs
        $comments = Comment::with('blog')->paginate(10); // 10 comments per page
        return view('admin.ajaxComponents.comment_table', compact('comments'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'blog_id' => 'required|exists:blogs,id', // Ensure the blog exists
        ]);

        // Create the comment
        $comment = new Comment();
        $comment->name = $validated['name'];
        $comment->email = $validated['email'];
        $comment->message = $validated['message'];
        $comment->blog_id = $validated['blog_id'];
        $comment->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your comment has been posted.');
    }


    public function destroy(Request $request, String $id)
    {
        Comment::destroy($id);
        return back()->with('success', 'Comment deleted successfully.');
    }
}
