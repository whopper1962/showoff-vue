<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function users () {
        $response = new \stdClass();
        $response->name = 'Whopper';
        return Response::json($response);
    }
}
