<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\friends;

class CobaController extends Controller
{
    public function index()
    {
        $friends = friends::orderBy('id','desc')->paginate(3);
        return view('friends.index', compact('friends'));
    }
    public function create()
    {
        return view('friends.create');
        
    }
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required | numeric',
            'alamat' => 'required',
        ]);
 
        $friends = new Friends;
 
        $friends->nama = $request->nama;
        $friends->no_tlp = $request->no_tlp;
        $friends->alamat = $request->alamat;
 
        $friends->save();

        return redirect('/');
    }
    public function show($id)
    {
        $friends = friends::where('id', $id)->first();
        return view('friends.show',['friends' => $friends]);
    }
    public function edit($id)
    {
        $friends = friends::where('id', $id)->first();
        return view('friends.edit',['friends' => $friends]);
    }
    public function update(Request $request, $id)
    {
        // Validate the request...
        $request->validate([
            'nama' => 'required|unique:friends|max:255',
            'no_tlp' => 'required | numeric',
            'alamat' => 'required',
        ]);
        
        friends::find($id)->update([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
        ]);
        return redirect('/');
    }

    public function destroy(Request $request, $id){
        friends::find($id)->delete();
        return redirect('/');
    }
    
}
