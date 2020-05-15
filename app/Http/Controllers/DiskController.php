<?php

namespace App\Http\Controllers;

use App\disk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $disk= Disk::all();
        return view('disk.index',compact('disk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    echo "tes";exit;
         $disk=new Disk;
        $request->validate([
                'name'=>'required',
                'host'=>'required|unique:disks',
                'username'=>'required',
                'password'=>'required|size:9',
                'port'=>'required|numeric',
                'path'=>'required'
            ]);
       
        $disk=Disk::create([
                'name' => $request['name'],
                'host' => $request['host'],
                'username' => $request['username'],
                'password' => Hash::make($request['password']),
                'port' => $request['port'],
                'path' => $request['path'],
        ]);
        //  $student=new Student;
        // $student->nama: ke database =$request->nama : dari from yang kita isi;
        // $disk->name=$request->name;
        // $disk->nim=$request->nim;
        // $disk->username=$request->username;
        // $disk->password=$request->password;
        // $disk->port=$request->port;
        // $disk->path=$request->path;
        // $disk->save();
         $disk->save();

        //  Disk::create($request->all());
        
         return redirect('/disk')->with('status', 'Data Disk Berhasil di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function show(disk $disk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function edit(disk $disk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, disk $disk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disk $disk)
    {
         Disk::destroy($disk->id);
        return redirect('/disk')->with('status', 'Data user Berhasil di Hapus!');
    }
}
