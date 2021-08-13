<?php

// php artisanコマンドでコントローラーを作成
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index()
    {
        // practice.blade.phpを返している
        return view('practice');
    }
}
