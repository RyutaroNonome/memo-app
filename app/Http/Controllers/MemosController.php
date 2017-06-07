<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Memo;

class MemosController extends Controller
{
  public function index()
  {
    $memos = Memo::all();

    return view('memos.index')->with('memos', $memos);
  }
  public function store(Request $request)
  {
    Memo::create(
      array(
        'text' => $request->text
      )
    );
    return redirect('/');
  }
  public function destroy($id)
  {
    Memo::destroy($id);
    return redirect('/');
  }
}