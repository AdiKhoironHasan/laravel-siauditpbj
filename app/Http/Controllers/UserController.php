<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', [
            'title' => 'Data Users',
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return abort(403);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required',
                'username' => 'required',
                'email' => 'required|email',
                'level' => 'required',
                'jabatan' => 'required',
                'password1' => 'required_with:password2|same:password2',
                'password2' => 'required'
            ]);

            $validatedData = [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'level' => $request->level,
                'jabatan' => $request->jabatan,
                'password' => $request->password1,
                'foto' => 'default/empty-foto.png',
                'ttd' => 'default/empty-ttd.png'
            ];
            User::firstOrCreate($validatedData);
        } catch (Exception $e) {
            return back()->with('error', 'User gagal ditambah!');
        }

        return back()->with('success', 'User berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {
            $rules = [
                'username' => 'required',
                'status' => 'required',
                'jabatan' => 'required',
                'level' => 'required',
            ];

            $validatedData = $request->validate($rules);

            $user->update($validatedData);
        } catch (Exception $e) {
            return redirect('/user')->with('error', 'User gagal diupdate!');
        }

        return redirect('/user')->with('success', 'User berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (\Throwable $th) {
            // return 'gagal hapus user' . $th;
            redirect('/user')->with('success', 'User gagal dihapus!');
        }

        return redirect('/user')->with('success', 'User berhasil dihapus!');
    }
}
