<?php

namespace App\Http\Controllers;

use App\Models\OnlineNewsletters as OnlineNewsletter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OnlineNewsletterController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        if (!$request->has('email')) return Redirect::back();
        $email = $request->input('email');

        if (OnlineNewsletter::whereEmail($email)->exists())
            return Redirect::back()->with([
                'newsletter' => 'already',
                'email' => "$email",
                'q' => "newsletter",
                'qr' => "zHX854D5SDs8tx5#00HMsk7",
            ]);

        $newsletter = new OnlineNewsletter();
        $newsletter->email = $email;
        $newsletter->save();

        $request->session()->put('newsletter', true);

        return Redirect::route('home.index', [
            'newsletter' => 'done',
            'q' => "newsletter",
            'message'=>"done",
        ]);
    }

    public function delete(Request $request): View|RedirectResponse
    {
        /// fr/home/newsletter/unsubscribe

        if (!$request->has('email')) abort(404);
        //Redirect::route('home.index',['unsubscribe'=>"null"]);

        $email = $request->input('email');
        if (!OnlineNewsletter::whereEmail($email)->exists())
            return Redirect::route('home.index', [
                'q' => 'newsletter',
                'message' => "email do not exist",
            ]);

        OnlineNewsletter::whereEmail($email)->delete();

        $email = $request->input('email');
        return view("newsletter", ['email' => $email]);
    }
}
