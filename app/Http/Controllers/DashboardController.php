<?php

namespace App\Http\Controllers;

use App\Models\Rencana;
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

        $totalRKA = Rencana::count();
        $totalRKATerlaksana = Rencana::where('status', 'Terlaksana')->count();
        $totalRKABelum = Rencana::where('status', 'Belum Terlaksana')->count();
        $totalUser = User::where('status', 'Aktif')->count();
        $title = 'Dashboard';
        $part = 'Rencana Kerja Audit';

        return view('dashboard', compact('totalRKA', 'totalRKATerlaksana', 'totalRKABelum', 'totalUser', 'title', 'part'));
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
        try {
            User::where('id', $id)->update($validatedData);
        } catch (Exception $e) {
            return back()->with('error', 'User gagal diupdate!');
        }

        return back()->with('success', 'User berhasil diupdate!');
    }

    public function passwordUpdate($id, Request $request)
    {
        try {

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

                return back()->with('success', 'cUpdate password berhasil!');
            } else {
                return back()->with('error', 'Update password gagal!');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Update password gagal!');
        }
    }

    public function photoUpdate($id, Request $request)
    {
        try {
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
        } catch (Exception $e) {
            return back()->with('error', 'update foto gagal!');
        }

        return back()->with('success', 'update foto berhasil!');
    }

    public function ttdUpdate($id, Request $request)
    {
        try {

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
        } catch (Exception $e) {
            return back()->with('error', 'update tanda tangan gagal!');
        }

        return back()->with('success', 'update tanda tangan berhasil!');
    }
}
