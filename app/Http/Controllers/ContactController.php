<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);


        $contact = new contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;


        $contact->save();
        // return redirect()->back()->with('status', 'New Project Added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function message_show($id)
    {
        $contacts = DB::table('contacts')->where('id', $id)->first();
        return view('show', ['contacts' => $contacts]);
    }

    public function showcontact(contact $contact)
    {
        $contacts = DB::table('contacts')->orderBy('id', 'DESC')->get();
        return view('contact', ['contacts' => $contacts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }


    public function mark_as_unread($id)
    {
        $task = contact::find($id);
        $task->status = false;
        $task->save();
        return redirect()->back()->with('mark_as_unread_status', 'Message Mark As Unread Sucessfully');
    }

    public function mark_as_read($id)
    {
        $task = contact::find($id);
        $task->status = true;
        $task->save();
        return redirect()->back()->with('mark_as_read_status', 'Meaashe Mark as Read Sucessfully');;
    }

    public function message_delete($id)
    {
        DB::table('contacts')->where('id', $id)->delete();
        // return redirect()->back()->with('message_delete_status', 'Message Delete Sucessfully');
    }

    public function message_delete2($id)
    {
        DB::table('contacts')->where('id', $id)->delete();
        return redirect('showcontact')->with('message_delete_status', 'Message Delete Sucessfully');
    }




}
