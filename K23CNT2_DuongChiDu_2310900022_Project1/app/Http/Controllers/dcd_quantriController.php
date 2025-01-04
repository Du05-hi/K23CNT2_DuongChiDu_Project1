<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\dcd_quantri;
use Illuminate\Support\Facades\Hash;
use App\Models\Dcdquantri;

class dcd_quantriController extends Controller
{
    public function login()
    {
        return view('dcdlogin/dcd-login'); // Hiển thị trang đăng nhập
    }

    public function loginSubmit(Request $request)
    {
        // Xác thực thông tin
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $Dcdquantri = Dcdquantri::where('email', $request->email)->first();

        if ($Dcdquantri && Hash::check($request->password, $user->password)) {
            // Nếu đăng nhập thành công, chuyển hướng đến trang welcome
            return redirect()->route('dcdAdmins');
        }

        return back()->withErrors(['email' => 'Invalid email or password.']);
    }
}
