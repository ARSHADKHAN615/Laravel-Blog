<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class page extends Controller
{
    function listing()
    {
        $data['results'] = DB::table('pages')->orderBy("id", "desc")->get();
        // print_r($data['result'][0]);
        return view("admin/page/list", $data);
    }
    function submit(Request  $request)
    {
        // print_r($request->input());
        $request->validate([
            'name' => "required",
            'slug' => "required|unique:pages",
            'description' => "required",
        ]);


        $arr = [
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'status' => 1,
            'adden_on' => date("Y-m-d h:i:s"),
        ];

        DB::table('pages')->insert($arr);
        $request->session()->flash("msg", "Data Saved");
        return redirect('admin/page/list');
    }
    function delete(Request  $request, $id)
    {
        DB::table('pages')->where('id', $id)->delete();
        $request->session()->flash("msg", "Data DELETE");
        return redirect('admin/page/list');
    }

    function edit($id)
    {
        $data['results'] = DB::table('pages')->where('id', $id)->get();
        return view("admin/page/edit", $data);
    }

    function update(Request  $request, $id)
    {
        $request->validate([
            'name' => "required",
            'slug' => "required",
            'description' => "required",
        ]);

        $arr = [
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'description' => $request->input('description'),
            'status' => 1,
            'adden_on' => date("Y-m-d h:i:s"),
        ];

        $data['results'] = DB::table('pages')->where('id', $id)->update($arr);
        $request->session()->flash("msg", "Data Update");
        return redirect('admin/page/list');
    }
}
