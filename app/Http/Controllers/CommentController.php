<?php

namespace App\Http\Controllers;

use App\Comment;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('welcome', [
            'comments' => $comments,
            ]);
    }


    public function store(){

        request()->validate([
            'content' => ['required'],
        ]);

        Comment::create([
            'name' => 'Steven',
            'url' => 'url',
            'body' => request('content'),
        ]);

        return 'Votre commentaire à bien été ajouté.';
    }
}
