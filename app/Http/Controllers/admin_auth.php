<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_auth extends Controller
{
    function login_submit(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $result = DB::table('users')->where('username', $email)->where('password', $password)->get();



        if (isset($result[0]->id)) {
            if ($result[0]->status == 1) {
                $request->session()->put("BLOG_USER_ID", $result[0]->id);
                $request->session()->put("BLOG_USER_NAME", $result[0]->username);
                return redirect('admin/post/list');
            } else {
                $request->session()->flash("msg", "Account Deactivated");
            }
        } else {
            $request->session()->flash("msg", "Please Enter Valid Details");
            return redirect('admin/login');
        }
    }
}
