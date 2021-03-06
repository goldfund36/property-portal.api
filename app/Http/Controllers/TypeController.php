<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function getTypes() {
        return response()->json(Type::all());
    }
}
