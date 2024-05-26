<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.login.customer');
    }

    public function register(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'Nomer_Induk_Mahasiswa' => 'required|string|max:255',
            'Nomer_Telepon' => 'required|string|max:11',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Simpan data pengguna ke tabel 'users'
        $user = User::create([
            'username' => $request->Nomer_Induk_Mahasiswa,
            'password' => Hash::make($request->password),
            'role' => 'customer', // Tambahkan role default untuk pengguna baru
        ]);
        

        // Simpan data tambahan ke tabel 'm_customer' jika diperlukan
        Customer::create([
            'user_id' => $user->id,
            'namaCustomer' => $request->name,
            'nomorTelepon' => $request->Nomer_Telepon,
            //Tambahkan kolom lain yang diperlukan
        ]);

        // Redirect pengguna ke halaman login setelah registrasi berhasil
        return redirect()->route('login.Customer')->with('success', 'Pendaftaran berhasil. Silakan login.');
    }
}