<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private $param;
    public function index(){
        $roleUser = \Auth::user()->roles->pluck('name')[0];
        if ($roleUser == 'admin') {
            return redirect('/back-admin/dashboard');
        } elseif ($roleUser == 'user') {
            return redirect('/back-user/dashboard');
        }else {
            return redirect('/logout');
        }
    }
}
