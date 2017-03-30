<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::all();
        return view('admin.admin')->with('new',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new news;
        $post->picture = $request->picture;
        $post->topic = $request->topic;
        $post->body = $request->body;
        $post->author = $request->author;
        $post->types = $request->types;
        $post->position = $request->position;
        $post->save();

        if ($post-> save()){
            return Redirect::to('news');

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = news::find($id);
        return view('admin.view', ['news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'picture' => 'required|string',
            'topic'   => 'required',
            'body'    => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('news/'.$id.'/edit')
                ->withError($validator)
                ->withInput(Input::except('password'));
        } else {
            //store
            $post = news::find($id);
            $post->picture = Input::get('picture');
            $post->topic = Input::get('topic');
            $post->body = Input::get('body');
            $post->author = Input::get('author');
            $post->position = Input::get('position');
            $post->save();

            Session::flash('message','Success Update new post, Recheck the content at the link!');
            return Redirect::to('news');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del= News::find($id);
        if ($del->delete()){
            return Redirect::to('admin.admin');
        }
    }
}
