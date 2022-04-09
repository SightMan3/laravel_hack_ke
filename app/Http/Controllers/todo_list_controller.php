<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hack;

class todo_list_controller extends Controller
{
    //
    public function index()
    {
        return view('welcome', ['list_items' => hack::all()]);
    }


    public function save_item(Request $req)
    {
        \Log::info(
            json_encode($req->all())
        );

        $new_item = new hack;
        $new_item->name = $req->list_title;
        $new_item->body = $req->list_body;
        $new_item->footer = $req->list_footer;
        $new_item->save();

        return redirect('/');
    }
}
