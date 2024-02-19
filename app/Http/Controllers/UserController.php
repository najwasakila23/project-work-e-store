<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function index() {
        $datas = User::orderBy('created_at', 'DESC')->get();

        // $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::pageBreadcrumbs;

        return view('user' . '.index', compact('datas'));
    }
}
