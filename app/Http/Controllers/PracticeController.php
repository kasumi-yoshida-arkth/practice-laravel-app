<?php

// php artisanコマンドでコントローラーを作成
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PracticeController extends Controller
{
    public function index()
    {
        // bladeに渡すデータを以下に記載
        $data = ['name'=>'Kasumi', 'message'=>'Hey'];

        // itemsテーブルの情報を全て取得
        $items = Item::all();
        // practice.blade.phpを返している
        return view('practice')->with([
            'data' => $data,
            'items'=> $items,
        ]);
    }
}
