<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cruds;

class CrudController extends Controller
{
    public function getEmployees()
    {
        return response()->json(Cruds::all(), 200);
    }
}
