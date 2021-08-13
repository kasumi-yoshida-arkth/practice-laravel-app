<?php

// php artisanコマンドでコントローラーを作成
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index()
    {
        // bladeに渡すデータを以下に記載
        $data =array();
        $data['name'] = 'Kasumi';
        $data['message'] = 'Hey';
        // practice.blade.phpを返している
        return view('practice')->with(
            'data', $data
        );
    }
}
