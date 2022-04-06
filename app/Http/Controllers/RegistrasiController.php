<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRegistrasiRequest;
use App\Http\Requests\UpdateRegistrasiRequest;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(request('search_name','per_page')){
            if(!$request['per_page']){
                return view('index',[
                    'datas' => Registrasi::latest()->paginate(5),
                    'per_page' => 5,
                    'search_name' => ""
                ]);
            }
            $registrasis = Registrasi::latest();
            return view('index',[
                'datas' => $registrasis->Where('nama', 'like', '%' . request('search_name') . '%' )
                                        ->orWhere('alamat', 'like', '%' . request('search_name') . '%' )
                                        ->orWhere('jurusan', 'like', '%' . request('search_name') . '%' )
                                        ->orWhere('asalsmp', 'like', '%' . request('search_name') . '%' )
                                        ->paginate(request('per_page'))
                                        ->withQueryString(),
                'per_page' => $request['per_page'],
                'search_name' => $request['search_name']
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrasi._create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegistrasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrasiRequest $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'asalsmp' => 'required',
            'jurusan' => 'required',
        ]);
        Registrasi::insert($validate);
        return redirect('registrasi')->with('message' ,'tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function show(Registrasi $registrasi)
    {
        $data = Registrasi::where('id',$registrasi->id)->first();
        return view('registrasi._view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrasi $registrasi)
    {
        $data = $registrasi;
        return view('registrasi._edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistrasiRequest  $request
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistrasiRequest $request, Registrasi $registrasi)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'asalsmp' => 'required',
            'jurusan' => 'required',
        ]);

        Registrasi::where('id',$registrasi->id)->update($validate);
        return redirect('registrasi')->with('message' ,'edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrasi $registrasi)
    {
        registrasi::destroy($registrasi->id );
        return redirect('registrasi')->with('message' ,'delete');
    }

    public function cetakPdfAll()
    {
        $datas = Registrasi::all();
        return view('pdf', compact('datas'));
    }

    Public function cetakPdfId($id)
    {
        $data = Registrasi::where('id',$id)->first();
        return view('pdf_id', compact('data'));
    }

    public function landingPage(){
        return view('landing_page');
    }

    public function showDaftar()
    {
        return view('registrasi._user_registrasi');
    }

    public function daftar(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'asalsmp' => 'required',
            'jurusan' => 'required',
        ]);
        Registrasi::insert($validate);
        return redirect('landing-page')->with('message' ,'tambah');
    }
}
