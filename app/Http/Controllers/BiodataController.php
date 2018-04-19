<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use Auth;
use App\Pendidikan;
use App\Pengalaman;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $biodatas = Biodata::orderBy('id', 'DESC')->paginate(5);
      return view('biodata.index', compact('biodatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      request()->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
      ]);
      // dd($request);
      $user = Auth::user();
      $biodata = new Biodata;
      $biodata->user_id = $user->id;
      $biodata->nama = $request->nama;
      $biodata->telepon = $request->telepon;
      $biodata->tempat_lahir = $request->tempat_lahir;
      $biodata->tanggal_lahir = $request->tanggal_lahir;
      $biodata->website = $request->website;
      $biodata->alamat = $request->alamat;

      if( $request->hasFile('foto')) {
        $file = $request->file('foto');
        $ext = strtolower($file->getClientOriginalExtension());
        $Namagambar = time().'.'.$ext;
        $request->file('foto')->move(public_path('img/foto'), $Namagambar);
        $biodata->foto = $Namagambar;
        $biodata->save();
      }

      foreach ($request->keterangan_pendidikan as $key=>$value) {
        $pendidikan = new Pendidikan;
        $pendidikan->biodata_id = $biodata->id;
        $pendidikan->keterangan = $value;
        $pendidikan->tahun = $request->tahun_pendidikan[$key];
        $pendidikan->save();
      }

      foreach ($request->keterangan_pengalaman as $key=>$value) {
        $pengalaman = new Pengalaman;
        $pengalaman->biodata_id = $biodata->id;
        $pengalaman->keterangan = $value;
        $pengalaman->tahun = $request->tahun_pengalaman[$key];
        $pengalaman->save();
      }

      return redirect('biodata')
                        ->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
