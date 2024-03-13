<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index(){
        $body  = About::all();
        return view('components.about', [
            'body' => $body
        ]);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $slide =  About::findOrFail(1);
        $slide -> body = $request->body;
        $slide->save();
        return redirect('about');
    }

}
