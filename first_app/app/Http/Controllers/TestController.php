<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test; //Testモデルを使えるように読む
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        
        // エロクアント
        $values = Test::all();
        // dd($values);

        $count = Test::count();

        $first = Test::findOrFail(1);

        $mimic = Test::where('name', '=', 'mimic');
        

        // クエリビルダー
        $queryBuilder = DB::table('tests')->where('name', '=', 'mimic')
        ->select('id', 'text')
        ->get();

        dd($values, Test::count(), $first, $mimic, $queryBuilder);

        return view('tests.test', compact('values'));
    }
}
