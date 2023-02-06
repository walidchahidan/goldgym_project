<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AssistantController extends Controller
{
    //
    public function displayassistant()
    {
        return view('assistantpage.assistanthome');
    }
}
