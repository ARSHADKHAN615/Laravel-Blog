<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{
    public function home()
    {
        $data['results'] = DB::table('posts')->orderBy("id", "desc")->get();
        return view("front.home", $data);
    }
    public function show($id)
    {
        $data['results'] = DB::table('posts')->where('slug', $id)->orderBy("id", "desc")->get();
        return view("front.post", $data);
    }
    public function pages($id)
    {
        $data['results'] = DB::table('pages')->where('slug', $id)->orderBy("id", "desc")->get();
        return view("front.page", $data);
    }

    public static function page_menu()
    {
        $data = DB::table('pages')->where('status', 1)->get();
        return $data;
    }
}
