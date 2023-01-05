<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\board;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ForumController extends Controller
{
    public function index()
    {
        //$boards = board::all();
        // $count = $boards->count();
        // return view('index',compact('boards'));

        return view('index', [
            'boards' => DB::table('board')->orderBy('id','desc')->Paginate(15)
        ]);
    }

    public function store()
    {
        return view('store');
    }

    public function store2(Request $request)
    {
        $title = $request->input('title');
        $name = $request->input('name');
        $content = $request->input('content');

        DB::table('board')->insert([
            'title' => $title,
            'name' => $name,
            'content' => $content,
            'created_at' => now(),
            'updated_at' => now()

        ]);

        return redirect('board');
    }

    public function read(board $board)
    {



        return view('read',compact('board'));
    }

}
