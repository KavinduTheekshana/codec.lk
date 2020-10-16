<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ongoingprojects = DB::table('projects')->where(['status' => '1'])->take(6)->get();
        $completedprojects = DB::table('projects')->where(['status' => '2'])->take(8)->get();
        return view('welcome', ['ongoingprojects' => $ongoingprojects,'completedprojects' => $completedprojects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'location' => ['required'],
            'description' => ['required'],
            'status' => ['required'],
        ]);


        $projects = new projects();
        $projects->title = $request->input('title');
        $projects->location = $request->input('location');
        $projects->description = $request->input('description');
        $projects->status = $request->input('status');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'uploads/'; // upload path
            $project_image = 'uploads/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $project_image);
            $projects->image = "$project_image";
        } else {
            $projects->image = 'uploads/default.jpg';
        }

        $projects->save();
        return redirect('projects')->with('status', 'New Project Added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function showcompleted(projects $projects)
    {
        $projects = DB::table('projects')->where(['status' => '2'])->get();
        return view('completedproject', ['projects' => $projects]);
    }

    public function showongoing(projects $projects)
    {
        $projects = DB::table('projects')->where(['status' => '1'])->get();
        return view('ongoingproject', ['projects' => $projects]);
    }

    public function showhold(projects $projects)
    {
        $projects = DB::table('projects')->where(['status' => '0'])->get();
        return view('holdproject', ['projects' => $projects]);
    }

    public function completed(projects $projects)
    {
        $projects = DB::table('projects')->where(['status' => '2'])->get();
        return view('completed', ['projects' => $projects]);
    }

    public function ongoing(projects $projects)
    {
        $projects = DB::table('projects')->where(['status' => '1'])->get();
        return view('ongoing', ['projects' => $projects]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(projects $projects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
      


        $projects = new projects();
        $projects->title = $request->input('title');
        $projects->location = $request->input('location');
        $projects->description = $request->input('description');
        $projects->status = $request->input('status');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'uploads/'; // upload path
            $project_image = 'uploads/' . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $project_image);
            $projects->image = "$project_image";
        }else {
            $projects->image = DB::table('projects')->where('id', $id)->value('image');
        }

        $data = array(
            'title' => $projects->title,
            'location' => $projects->location,
            'description' => $projects->description,
            'status' => $projects->status,
            'image' => $projects->image,
        );

        projects::where('id', $id)->update($data);
        $projects->update();
        return redirect()->back()->with('status', 'Project Update Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(projects $projects)
    {
        //
    }

    public function project_diactivate($id)
    {
        $task = projects::find($id);
        $task->active = false;
        $task->save();
        return redirect()->back()->with('project_diactivate_status', 'Project Was Diactivated Sucessfully');
    }

    public function project_activate($id)
    {
        $task = projects::find($id);
        $task->active = true;
        $task->save();
        return redirect()->back()->with('project_activate_status', 'Project Was Activated Sucessfully');;
    }

    public function project_delete($id)
    {
        DB::table('projects')->where('id', $id)->delete();
        // return redirect()->back()->with('project_diactivate_status', 'Project Delete Sucessfully');
    }

    public function project_edit($id)
    {
        $projects = DB::table('projects')->where('id', $id)->first();
        return view('updateprojects', ['projects' => $projects]);
    }

    public function dashboard()
    {
        $users = DB::table('users')->count();
        $totalprojects = DB::table('projects')->count();
        $haldprojects = DB::table('projects')->where(['status' => '0'])->count();
        $ongoingprojects = DB::table('projects')->where(['status' => '1'])->count();
        $completedprojects = DB::table('projects')->where(['status' => '2'])->count();

        $unreadmessagers = DB::table('contacts')->where(['status' => '0'])->count();
        $readmessagers = DB::table('contacts')->where(['status' => '2'])->count();
        $totelmessagers = DB::table('contacts')->where(['status' => '2'])->count();
        return view('dashboard', ['users' => $users,'totalprojects' => $totalprojects,'haldprojects' => $haldprojects,'ongoingprojects' => $ongoingprojects,
        'completedprojects' => $completedprojects,'unreadmessagers' => $unreadmessagers,'readmessagers' => $readmessagers,'totelmessagers' => $totelmessagers]);
    }

}
