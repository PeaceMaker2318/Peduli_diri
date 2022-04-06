<?php

namespace App\Http\Controllers;
use PDF;
use App\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $user = User::all();

        return view('admin.user',compact('user'));

    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/admin');
    }
    public function cetakUser(){
        $user = User::all();

        $pdf = PDF::loadview('user-pdf',['user'=>$user]);
    	return $pdf->stream();
        // dd($user);
    }
    public function ubahAdmin($id){
        $user = User::find($id);
        $data = [
            'role' => 'user'
        ];
        $user->update($data);
        return redirect ('/admin');
}

    public function cetakHanyaUser(){
        $user = User::all();
        
       
        $pdf = PDF::loadview('hanyaUser-pdf',['user'=>$user]);
    	return $pdf->stream();
        // dd($user);
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$user = DB::table('pegawai')
		->where('name','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke admin user
		return view('user',['user' => $user]);
 
	}
    public function ubahUser($id)
    {
        $user = User::find($id);

        $data = [
            'role'=> 'admin',
        ];

        $user->update($data);
        return redirect('/admin');
    }
}
