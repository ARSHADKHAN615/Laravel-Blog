<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contact extends Controller
{
    function listing()
    {
        $data['results'] = DB::table('contacts')->orderBy("id", "desc")->get();
        return view("admin/contact/list", $data);
        // echo "<pre>";
        // print_r($data);
    }
}
