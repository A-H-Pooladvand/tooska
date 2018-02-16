<?php

namespace App\Http\Controllers\User\Front\Email;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfirmController extends Controller
{
    public function requestConfirm()
    {
        return view('user.front.confirm_email.create');
    }

    public function confirmUser(Request $request, $id)
    {
        $id = decrypt($id);
        $user = User::findOrFail($id);

        $user->is_active = true;
        $user->save();

        return redirect('/');
    }
}
