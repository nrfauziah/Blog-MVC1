<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    
    /**
     *  index
     * 
     * @return void
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        Blog::create([
            'image' => $request->image,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        
        return redirect('/datablog')->with('success','Data berhasil ditambahkan !');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::where('id', $id)->first();
        return view('blog/edit', compact('blogs'));
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
        $blogs = Blog::where('id', $id)->update([
            'image' => $request ['image'],
            'title' => $request ['title'],
            'content' => $request ['content']

        ]);
        return redirect()->route('datablog')->with('success','Data berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = \App\Blog::find($id);
        $blogs->delete();
        return redirect('/datablog')->with('success','Data berhasil dihapus');
    }
}