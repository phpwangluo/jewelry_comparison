<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function test($id){
        return Article::query()->findOrFail($id);
    }
}
