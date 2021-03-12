<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{
    function listing()
    {
        $data['results'] = DB::table('posts')->orderBy("id", "desc")->get();
        // print_r($data['result'][0]);
        return view("admin/post/list", $data);
    }
    function submit(Request  $request)
    {
        print_r($request->input());
        $request->validate([
            'title' => "required",
            'slug' => "required|unique:posts",
            'short_desc' => "required",
            'long_desc' => "required",
            'image' => "required|mimes:jpeg,png,jpg",
            'post_date' => "required",
        ]);


        $image = $request->file('image');
        $ext = $image->extension();
        $file = time() . "." . $ext;
        $image->storeAs("public/post", $file);

        $arr = [
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'short_desc' => $request->input('short_desc'),
            'long_desc' => $request->input('long_desc'),
            'image' => $file,
            'post_date' => $request->input('post_date'),
            'status' => 1,
            'add-on' => date("Y-m-d h:i:s"),
        ];

        DB::table('posts')->insert($arr);
        $request->session()->flash("msg", "Data Saved");
        return redirect('admin/post/list');
    }
    function delete(Request  $request, $id)
    {
        DB::table('posts')->where('id', $id)->delete();
        $request->session()->flash("msg", "Data DELETE");
        return redirect('admin/post/list');
    }

    function edit(Request  $request, $id)
    {
        $data['results'] = DB::table('posts')->where('id', $id)->get();
        return view("admin/post/edit", $data);
    }

    function update(Request  $request, $id)
    {
        $request->validate([
            'title' => "required",
            'slug' => "required|unique:posts",
            'short_desc' => "required",
            'long_desc' => "required",
            'image' => "mimes:jpeg,png,jpg",
            'post_date' => "required",
        ]);

        $arr = [
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'short_desc' => $request->input('short_desc'),
            'long_desc' => $request->input('long_desc'),
            'post_date' => $request->input('post_date'),
            'status' => 1,
            'add-on' => date("Y-m-d h:i:s"),
        ];

        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $ext = $image->extension();
            $file = time() . "." . $ext;
            $image->storeAs("public/post", $file);
            $arr['image'] = $file;
        }



        $data['results'] = DB::table('posts')->where('id', $id)->update($arr);
        $request->session()->flash("msg", "Data Update");
        return redirect('admin/post/list');
    }
}
