<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('form_skill');
    }

    public function hasil(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5|max:20',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required',
        ]);
        // return $request;
        return view('hasil_skill', ['data' => $request]);
    }
}
