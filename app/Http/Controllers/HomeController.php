<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $siswa = Siswa::all();

        return view('home', compact('siswa'));
    }
    public function insert(Request $request)
    {
        $validasi = $request->validate([
            'nisn' => 'required|numeric',
            'nama' => 'required',
            'kelas' => 'required'
        ]);

        Siswa::create($validasi);

        return redirect()->back();

    }
    public function destroy($id)
    {
        $siswa = Siswa::findorfail($id);
        $siswa->delete($id);

        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());

        return redirect()->back();
    }
}