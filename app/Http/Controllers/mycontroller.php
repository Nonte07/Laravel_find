<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mycontroller extends Controller
{
    public function this()
    {
        $data = array();
        $data['userdata'] = DB::table('users')->get();
        return view('welcome', $data);
    }
    public function formsubmit(Request $req)
    {
        $data = array();
        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $image_name =  $req->file('img')->store('imeges');
        $data['image'] = $image_name;
        DB::table('users')->insert($data);
        return redirect()->back()->with('success', 'your message,here');
    }
    public function datetedata($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'your message,here');
    }
    public function editdata($id)
    {
        $data['editdata'] = DB::table('users')->where('id', $id)->first();
        return view('edit', $data);
    }
    public function updateForm(Request $req)
    {
        $data = array();
        $data['name'] = $req->name;
        $data['email'] = $req->email;
        //$image_name =  $req->file('img')->store('imeges');
        // $data['image'] = $image_name;
        DB::table('users')->where('id', $req->id)->update($data);
        return redirect('/')->with('success', 'your message,here');
    }
    public function filter()
    {
        $data = array();
        $query = DB::table('users');
        if (isset($_GET['filter'])) {
            $email =  $_GET['filter'];
            $query = $query->where('email', $email);
        }
        $query = $query->get();
        $data['userdata'] =  $query;
        return view('welcome', $data);
    }
}
