<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::table('articles')->orderBy('id', 'desc')->get();
        return view('articles', ['articles' => $articles]);
    }

    public function viewarticles($id)
    {
        $articles = DB::table('articles')->where(['id' => $id])->get();
        return view('viewarticles', ['articles' => $articles]);
    }


    public function addarticles()
    {
        return view('addarticles');
    }


    public function managearticles()
    {
        $articles = DB::table('articles')->get();
        return view('managearticles', ['articles' => $articles]);
    }

    public function singlearticle($id)
    {
        $articles = DB::table('articles')->where(['id' => $id])->first();
        return view('singlearticle', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
        ]);


        $articles = new articles();
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'uploads/articles/'; // upload path
            $article_image = 'uploads/articles/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $article_image);
            $articles->image = "$article_image";
        } else {
            $articles->image = 'uploads/articles/default.jpg';
        }

        $articles->save();
        return redirect('addarticles')->with('status', 'New Article Added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show($articles)
    {
        $contacts = DB::table('articles')->where('id', $articles)->first();
        return view('showarticle', ['contacts' => $contacts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(articles $articles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    

        $id = $request->input('id');
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
        ]);



        $articles = new articles();
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');

        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'uploads/articles/'; // upload path
            $article_image = 'uploads/articles/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $article_image);
            $articles->image = "$article_image";
        }else {
            $articles->image = $request->input('imagelink');
        }
        

        $data = array(
            'title' => $articles->title,
            'description' => $articles->description,
            'image' => $articles->image,
        );

        articles::where('id', $id)->update($data);
        $articles->update();
        return redirect()->back()->with('status', 'Article Update Sucessfully');




        return $request->input('id');
       

        $articles = new articles();
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'uploads/articles/'; // upload path
            $article_image = 'uploads/articles/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $article_image);
            $articles->image = "$article_image";
        } else {
            $articles->image = 'uploads/articles/default.jpg';
        }

        $articles->save();
        return redirect('addarticles')->with('status', 'New Article Added Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($articles)
    {
        DB::table('articles')->where('id', $articles)->delete();
    }



    public function article_diactivate($id)
    {
        $task = articles::find($id);
        $task->status = false;
        $task->save();
        return redirect()->back()->with('project_diactivate_status', 'Project Was Diactivated Sucessfully');
    }

    public function article_activate($id)
    {
        $task = articles::find($id);
        $task->status = true;
        $task->save();
        return redirect()->back()->with('project_activate_status', 'Project Was Activated Sucessfully');;
    }



}
