<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class HomeC extends Controller
{
    public function showelcome()
    {
        $datas = book::all();
        return view('welcome', compact('datas'));
    }

    public function create ()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Title'=> 'Required|min:5|max:20',
            'Author'=> 'Required|min:5|max:20',
            'Page'=> 'numeric|min:0',
            'Year'=> 'numeric|min:2000|max:2021'
        ]);
        book::create([
            'judul'=>$request->Title,
            'penulis'=>$request->Author,
            'halaman'=>$request->Page,
            'tahun'=>$request->Year
        ]);
        return redirect('/');
    }

    public function update($id)
    {
        $data = book::findorfail($id);
        return view('update', compact('data'));
    }

    public function delete($id)
    {
        book::destroy($id);
        return redirect('/');
    }

    Public function storebook(Request $request, $id)
    {
        $request->validate([
            'Title'=> 'Required|min:5|max:20',
            'Author'=> 'Required|min:5|max:20',
            'Page'=> 'numeric|min:0',
            'Year'=> 'numeric|min:2000|max:2021'
        ]);
        book::findorfail($id) -> update([
            'judul' => $request->Title,
            'penulis' => $request->Author,
            'halaman' => $request->Page,
            'tahun' => $request->Year
        ]);
        return redirect('/');
    }

    Public function read($id) {
        $data = book::findorfail($id);
        return view('view', compact('data'));
    }

}
