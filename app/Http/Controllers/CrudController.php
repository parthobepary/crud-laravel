<?php

namespace App\Http\Controllers;

use App\Models\Cruds;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function getEmployees($id = null)
    {
        if ($id) {
            return response()->json(Cruds::find($id), 200);
        } else {
            return response()->json(Cruds::all(), 200);
        }
    }
    public function addEmployees(Request $req)
    {
        if ($req->name) {
            $user = new Cruds;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->salary = $req->salary;
            $result = $user->save();
            return ["result" => "data save done", "status" => 200];
        } else {
            return ["result" => "data save faild", "status" => 500];
        }
    }

    public function updateEmployees($id, Request $req)
    {
        $user = Cruds::find($id);
        if ($user) {
            $user->name = $req->name;
            $user->email = $req->email;
            $user->salary = $req->salary;
            $result = $user->save();
            return ["result" => "data update done", "status" => 200];
        } else {
            return ["result" => "data update faild", "status" => 500];
        }

    }

    public function deleteEmployees($id)
    {
        $user = Cruds::all();
        if ($id) {
            $user = Cruds::find($id);
            $user->delete();
            return ["result" => "data delete done", "status" => 200];
        } else {
            return ["result" => "data delete faild", "status" => 500];
        }
    }
}
