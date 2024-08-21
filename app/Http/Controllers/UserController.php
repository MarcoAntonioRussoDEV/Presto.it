<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function dashboard(User $user){
        return view('user.dashboard', compact('user'));
    }

    public function updateProfileImage(Request $request, User $user)
    {

        if($request->hasFile("img") && $request->file("img")->isValid())
        {
            $path = "public/asset/img/".$user->id."_".$user->name;
            $imgName = "profile_img_".uniqid().".".$request->file("img")->extension();
            $user->img = $request->file("img")->storeAs($path,$imgName);
            $user->save();
        }

        return redirect()->back()->with('success', 'Immagine del profilo aggiornata con successo.');
    }


}
