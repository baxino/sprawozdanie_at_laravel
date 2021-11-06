<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('formularz');
    }
    
    public function store(Request $request)
    {
        
        $post=new Post;
        
        $post->title=$request->title;
        $post->opis=$request->opis;
        
        $post->save();
        
        return redirect('/post/thx_wyslanie_formularza')->with('status_formy', 'ok');
    }
    
    
    public function thx_formularz()
    {
        $test='ssda';
       

       
        return view('thx_formularz',["test" => $test]);
    }
    
    
    
    
}
