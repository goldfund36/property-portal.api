<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function getRegionByQuery($query) {
        $query = trim($query);
        return response()->json(Region::where('ru_name','like','%'.$query.'%')
            ->orWhere('en_name','like','%'.$query.'%')->get());
    }
}
