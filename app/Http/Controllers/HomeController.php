<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use App\Models\DoctorContact;
use App\Models\PhoneNumber;
use App\Models\EmailAddress;



class HomeController extends Controller
{
    //

    public function index(string $lang): RedirectResponse | View
    {
        if(!str_contains($lang,"fr")){
            return Redirect::route("home.index",["lang"=>"fr"]);
        }
        return view('home',["lang"=>$lang]);
    }

    public function prod(string $lang): View
    {
        return view('section.products', ["lang"=>$lang]);
    }

    public function nws(string $lang): View
    {
        return view('section.news', ["lang"=>$lang]);
    }

    private function _add(array $data) : void
    {
        $doctor = new DoctorContact();
        $doctor->first_name = $data['first_name'];
        $doctor->middle_name = $data['first_name'];
        $doctor->last_name = $data['first_name'];
        $doctor->save();

        $phoneNumbers = $data['phone_numbers'];
        foreach ($phoneNumbers as $phoneNumber) {
            $phone = new PhoneNumber();
            $phone->number = $phoneNumber;
            $phone->doctor_id = $doctor->id;
            $phone->save();
        }

        $emailAddresses = $data['email_addresses'];
        foreach ($emailAddresses as $emailAddress) {
            $email = new EmailAddress();
            $email->email = $emailAddress;
            $email->doctor_id = $doctor->id;
            $email->save();
        }
    }
}
