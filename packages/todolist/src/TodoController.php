<?php

namespace Temur\Todolist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function add($a,$b){
          $result=$a+$b;
          return view('todolist::add',compact('result'));
    }
    public function minus($a,$b){
        echo $a-$b;
    }
}
