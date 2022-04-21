<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\User;

class AssignmentsController extends Controller
{
    public function index()
    {
        $assignments = auth()->user()->assignments();
        return view('dashboard', compact('assignments'));
    }

    public function add()
    {
        return view('assignment.add');
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

    public function edit(Assignment $assignment)
    {
        if(auth()->user()->id == $assignment->user_id){
            return view('assignment.edit', compact('assignment'));
        }else{
            return redirect('/dashboard');
        }
    }

    public function update(Request $request, Assignment $assignment)
    {
        if(isset($_POST['delete'])){
            $assignment->delete();
            return redirect ('/dashboard');

        }else{
           $this->validate($request, [
               'description'=>'required'
           ]) ;
           $assignment->description= $request->description;
           $assignment->save();
           return redirect ('/dashboard');
        }

    }

}
