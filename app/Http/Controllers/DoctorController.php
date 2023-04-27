<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\EmailAddress;
use App\Models\PhoneNumber;
use Illuminate\Http\Request;

class DoctorController extends Controller
{


    public function create(Request $request)
    {
        return;
    }

    public function store(Request $request)
    {
        $data = $request->input('data');
        $doctor_id = $request->input("id");
        $doctor = Doctor::whereId($doctor_id);

        $this->fill_doctor($data, $doctor);
    }

    public function show(Request $request) : array
    {

        $data = [];
        if ($request->has('id')) {
            $doctor_id = $request->input("id");
            $doctors = Doctor::whereId($doctor_id);
        } else {
            $doctors = Doctor::all();
            foreach ($doctors as $doctor) {
                $info = [];
                $info = $doctor->toArray();
                //$phones = PhoneNumber::
                $info['phone_numbers'] = [];
                $info['email_addresses'] = [];

                $emails = EmailAddress::whereDoctorId($doctor['id']);

                $data['data'] = $info;
            }
        }
        return $data;
    }

    // php artisan make:command ImportCsvData

    /**
     * @param array $data
     * @param Doctor $doctor
     * @return void
     */
    private function fill_doctor(array $data, Doctor $doctor): void
    {
        $doctor->first_name = $data['first_name'];
        $doctor->middle_name = $data['middle_name'];
        $doctor->last_name = $data['last_name'];
        $doctor->sex = $data['sex'];
        $doctor->hospital = $data['hospital'];
        $doctor->speciality = $data['speciality'];
        $doctor->location = $data['location'];
        $doctor->save();
    }


    private function add_doctor(array $data): void
    {
        $doctor = new Doctor();
        //Doctor::creating([]);
        $this->fill_doctor($data, $doctor);

        $phoneNumbers = $data['phone_numbers'];
        foreach ($phoneNumbers as $phoneNumber) {
            $phone = new PhoneNumber();
            $phone->phone_number = $phoneNumber;
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
