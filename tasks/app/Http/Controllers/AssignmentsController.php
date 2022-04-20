<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\User;

class AssignmentsController extends Controller
{
    public function index()
    {
        $assignmets = auth()->user()->assignments();
        return view('dashbord', compact('assignment'));
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);

        $assignment = new Assignment();
        $assignment->description = $request->description;
        $assignment-> user_id = auth()->user()->id;
        $assignment->save();
        return redirect('/dashboard');
    }

}
