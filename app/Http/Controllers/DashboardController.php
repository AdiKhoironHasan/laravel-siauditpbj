<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{

    public function index()
    {
        if (Auth::user()->level == 'Ketua SPI' || Auth::user()->level == 'Auditor') {
            $dashboard = 'auditor-dashboard';
        } else if (Auth::user()->level == 'Auditee') {
            $dashboard = 'auditee-dashboard';
        } else if (Auth::user()->level == 'Direktur') {
            $dashboard = 'direktur-dashboard';
        }

        return view($dashboard, [
            'title' => 'Dashboard',
            'part' => 'Rencana Kerja Audit'
        ]);
    }

    public function profile()
    {
        return view('user.profile', [
            'title' => 'Profile',
            'user' => Auth::user()
        ]);
    }

    public function home()
    {
        return redirect('/dashboard');
    }
    public function profileUpdate($id, Request $request)
    {
        $rules = [
            'name' => 'required',
            'username' => 'required',
            'nohp' => 'required',
            'npak' => 'required'
        ];

        $validatedData = $request->validate($rules);

        User::where('id', $id)->update($validatedData);


        return back()->with('success', 'User berhasil diupdate!');
    }

    public function passwordUpdate($id, Request $request)
    {
        $user = User::findOrFail($id);

        $rules = [
            'passwordLama' => 'required',
            'password1' => 'required_with:password2|same:password2',
            'password2' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if (Hash::check($validatedData['passwordLama'], $user->password)) {
            $user->fill([
                'password' => Hash::make($validatedData['password1'])
            ])->save();

            return back()->with('success', 'change password successfully');
        } else {
            return back()->with('success', 'old password is wrong');
        }
    }

    public function photoUpdate($id, Request $request)
    {
        $request->validate([
            'foto' => 'required|image',
        ]);

        $path = $request->file('foto')->storePublicly('foto', 'public_upload');
        $user = User::findOrFail($id);
        $default = Str::substr($user->foto, 0, 7);
        if (!($default === 'default')) {
            Storage::disk('public_upload')->delete($user->ttd);
        }
        $user->update([
            'foto' => $path
        ]);

        return back()->with('success', 'update foto berhasil!');
    }

    public function ttdUpdate($id, Request $request)
    {
        $request->validate([
            'ttd' => 'required|image',
        ]);

        $path = $request->file('ttd')->storePublicly('ttd', 'public_upload');
        $user = User::findOrFail($id);
        $default = Str::substr($user->ttd, 0, 7);
        if (!($default === 'default')) {
            Storage::disk('public_upload')->delete($user->ttd);
        }
        $user->update([
            'ttd' => $path
        ]);

        return back()->with('success', 'update tanda tangan berhasil!');
    }
}
