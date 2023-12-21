<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VerifyController extends Controller
{
    public function verify($verify_key){
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();

        if($keyCheck){
            $user = User::where('verify_key', $verify_key)
            ->update([
                'active' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ]);
            return "verifikasi berhasil. Akun anda sudah aktif.";
        }else{
            return "Keys tidak Valid.";
        }
    }
}
