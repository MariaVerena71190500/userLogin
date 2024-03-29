<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\adminAddRequest;
use App\Http\Requests\passwordUpdateRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DataTables;

class adminPasswordController extends Controller{

    public function index(Request $request){
        $title = "Daftar Pengguna";
        $no = 1;

        if ($request->ajax()) {

            $data = User::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('no', function() use(&$no){
                        return $no++;
                    })
                    ->addColumn('action', function($row){
                        if ($row->role == 'admin') {
                            $btn = '<a href="'. url('/super/edit/'.$row->id) .'" class="edit btn btn-primary btn-sm">Edit</a>';
                            
                        }
                        else{
                            $btn = '<a href="'. url('/super/delete/' .$row->id) .'" onclick="return confirm(\'Anda yakin akan menghapus data '.$row->nama.'?\')" class="edit btn btn-danger btn-sm"  >Hapus</a>';

                        }
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('admin.index', compact('title'));
    }
    
    public function add(){
        $title = 'Tambah Pengguna';
        return view('admin.tambah', compact('title'));
    }

    public function save(adminAddRequest $request){
        $params = [
            'nama' => $request->name,
            'username' => $request->username,
            'role'=> $request->role,
            'password'=> Hash::make($request->password),
        ];

        User::create($params);

        return redirect()->route('index.admin')->with('success', 'Data pengguna berhasil ditambahkan.');
    }

    public function edit($id){
        $data = User::findOrFail($id);
        return view('admin.editAdmin', compact('data'));

        
    }

    public function update(passwordUpdateRequest $request){
        $user = Auth::user();
        $id = $request->id_user;
        $check = User::find($id);
        if (!$check) {
            return abort('404');
        }

        $checkKode = User::where('nama', $request->name)->first();
        if ($checkKode) {
            if ($checkKode->id != $id) {
                $err = new MessageBag;
                $err->add('nama', 'Admin sudah terpakai');
                return redirect()->back()->withErrors($err)->withInput();
            }
        }


        if (Hash::check($request->input('current_password'), $user->password)) {
            $check->nama = $request->name;
            $check->username = $request->username;
            $user->password = Hash::make($request->input('new_password'));
            $check->save();
            $user->save();
            return redirect()->route('index.admin')->with(['success' => 'Data Berhasil Diupdate']);
        } else {
            $request->session()->flash('error', 'Password saat ini tidak valid');
            return redirect()->back()->withInput();
        }

    }

    

    public function delete($id){
        $del = User::find($id);
        $del->delete();
        return redirect('/admin/super')->with('deleted','Data terhapus!');

    }



   
}
