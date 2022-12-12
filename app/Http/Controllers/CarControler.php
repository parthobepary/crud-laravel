<?php

namespace App\Http\Controllers;

use App\Models\empolyees;
use Illuminate\Http\Request;

class CarControler extends Controller
{
    public function test(Request $req, $id = null)
    {
        if ($req->isMethod('get')) {
            if ($id) {
                $data = response()->json(empolyees::find($id));
                return ["data" => $data->original, "status" => 200];
            } else {
                $data = response()->json(empolyees::all());
                return ["data" => $data->original, "status" => 200];
            }
        } elseif ($req->isMethod('post')) {
            $user = new empolyees;
            $user->name = $req->name;
            $user->salary = $req->salary;
            $user->save();
            return 'sucess';
        } elseif ($req->isMethod('put')) {
            $user = empolyees::find($id);
            $user->name = $req->name;
            $user->salary = $req->salary;
            $result = $user->save();
            return 'sucess';
        } else {
            $user = empolyees::find($id);
            $user->delete();
        }
    }
}
