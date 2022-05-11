<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Component;

class ComponentController extends Controller
{
    public function getComponents (Component $component) {
        $components = $component->all();
        return $components;
    }
}
