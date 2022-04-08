<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BooksController extends Controller
{
    	
  public function show(Books $books){
      //$art=Article::find($articles);


    	return view('details',['detail'=>$books]);


    }
    public function create(){
    	
    	return view('create');
    }


    public function store(){

   $Books=new Books();
   $Books->title=request('title');
   $Books->description=request('description');
   $Books->pages=request('pages');
   $Books->save();
   return  redirect(route('home'));
    }

      public function edit($id){
      	$Books=Books::find($id);
    	
    	return view('edit',compact('Books'));
    }

     public function update($id){
      	$Books=Books::find($id);
      	$Books->title=request('title');
        $Books->description=request('description');
        $Books->pages=request('pages');

        $Books->save();
    	
    	return  redirect(route('home'));
    }


        public function delete($id){

   $Books=Books::find($id);
   $Books->delete();
   return  redirect(route('home'));
    }
}
