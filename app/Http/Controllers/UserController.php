<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //tambah data user dengan Eloquent Model
        // $data = [
        //     'level_id' => 2,    
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::create($data);

        // // $data = [
        // //     'nama' => 'Pelanggan Pertama',
        // // ];
        // // UserModel::where('username', 'customer-1')->update($data); // update data user

        // // coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

        // $user = UserModel::find(1);
        // $user = UserModel::where('level_id', 1)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // $user = UserModel::findOr(20, ['username', 'nama'], function(){
            // abort(404);
        // });
        // $user = UserModel::findOrFail(1);
        // $user = UserModel::where('level_id', 2)->count();
        // $result = dd($user);

        $user = UserModel::firstOrNew(
            [  
                // 'username' => 'manager',
                // 'nama'=> 'Manager',
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2,  
            ]
        );
        $user->save();
        return view('user', ['data'=>$user]);
    }
}