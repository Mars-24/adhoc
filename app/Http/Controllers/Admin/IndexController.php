<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Message;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();
        return view('backend.message.index', compact('messages'));
    }
    public function credentialPage($id)
    {
        $admin = Admin::find($id);
        return view('backend.limited.edit', compact('admin'));
    }

    public function changePassword(Request $request, $id)
    {
        $admin = Admin::find($id);

        $message = [
            'email.required' => 'Veuillez saisir votre email',
            'email.email' => 'Veuillez saisir votre email',
            'fullname.required' => 'Veuillez saisir votre nom complet',
            'password.required' => 'Veuillez saisir le mot de passe',
            'password.min' => 'Le mot de passe doit contenir au moins 6 lettres',
        ];
        if ($admin) {
            $this->validate($request, [
                'email' => 'email|required',
                'fullname' => 'string|required',
                'password' => 'min:6|required',
            ], $message);

            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $status = $admin->fill($data)->save();
            if ($status) {
                return redirect()->route('admin')->with('success', 'mise a jour de l\'administrateur reussi ');
            } else {
                return back()->with('error', 'Utilisateur non troué');
            }
        } else {
            return back()->with('error', 'Livreur non troué');
        }
    }

      //logout
      public function userLogout(Request $request)
    {
        Session::forget('admins');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('home')
            ->with('success', 'Deconnexion reussie');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = message::find($id);
        if ($message) {
            $status = $message->delete();
            if ($status) {
                return redirect()
                    ->route('message.index')
                    ->with('success', 'Message supprimé avec succès');
            } else {
                return back()->with('error', 'Something went wrong');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }
}
