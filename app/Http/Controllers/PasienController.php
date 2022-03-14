<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pasien;
class pasienController extends Controller
{
    public function index()
    {
        $pasiens = pasien::all();
        return view ('dashboard.lihatPasien')->with('pasiens', $pasiens);
    }
    
    public function create()
    {
        return view('pasiens.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        pasien::create($input);
        return redirect('pasien')->with('flash_message', 'pasien Addedd!');  
    }
    
    public function show($id)
    {
        $pasien = pasien::find($id);
        return view('pasiens.show')->with('pasiens', $pasien);
    }
    
    public function edit($id)
    {
        $pasien = pasien::find($id);
        return view('pasiens.edit')->with('pasiens', $pasien);
    }
  
    public function update(Request $request, $id)
    {
        $pasien = pasien::find($id);
        $input = $request->all();
        $pasien->update($input);
        return redirect('pasien')->with('flash_message', 'pasien Updated!');  
    }
  
    public function destroy($id)
    {
        pasien::destroy($id);
        return redirect('pasien')->with('flash_message', 'pasien deleted!');  
    }
}