<?php

namespace App\Http\Controllers;

use App\Models\OnlineMessages;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OnlineMessageController extends Controller
{
    public function create(Request $request): RedirectResponse
    {
        if (!$request->has('name') and
            !$request->has('email') and
            !$request->has('message')) {

            $name = $request->input();
            $email = $request->input();
            $message = $request->input();

            $omsg = new OnlineMessages();
            $omsg->email = $email;
            $omsg->user_name = $name;
            $omsg->message = $message;
            $omsg->save();



            return Redirect::route('home.index', [
                'name' => $name,
                'email' => $email,
            ]);
        }

        return Redirect::back();
    }
}
