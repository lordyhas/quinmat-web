<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\EmailAddress;
use App\Models\PhoneNumber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    public function create(Request $request) : JsonResponse
    {
        if(!$request->has('data')) return response()->json(["message"=> "failed : no data received"]);
        $data = $request->input('data');

        $this->add_doctor($data);

        return response()->json(["message"=> "Doctor saved"]);
    }

    public function store(Request $request) : JsonResponse
    {
        if(!$request->has('id')) return response()->json(["message"=> "failed : no id received"]);
        if(!$request->has('data')) return response()->json(["message"=> "failed : no data received"]);
        $data = $request->input('data');
        $doctor_id = $request->input('id');
        $doctor = Doctor::whereId($doctor_id);
        $this->fill_doctor($data, $doctor);

        return response()->json(["message"=> "Doctor(id:$doctor_id) saved"]);
    }

    public function show(Request $request) : JsonResponse
    {
        if($request->has('where')){
            $data = $this->readOne($request);
        }else {
            $data = $this->readAll();
        }

        return response()->json(["data" => $data]);
    }


    private function readAll() : array
    {
        $data =  array();
        $doctors = Doctor::all();
        foreach ($doctors as $doctor) {
            $doc = $doctor->toArray();

            $emails = EmailAddress::whereDoctorId($doctor['id']);
            $phones = PhoneNumber::whereDoctorId($doctor['id']);

            $doc['phoneNumbers'] = $phones;
            $doc['emails'] = $emails;

            $data[$doctor['id']] = $doc;

        }
        return $data;
    }


    private function readOne(Request $request) : array
    {
        if ($request->has('where')) {
            $key = $request->input("where");
            $doctor = Doctor::all()->where($key)->first();
            return $doctor->toArray();
        }
        return ["message" => "request has not where parameter"];
    }

    // php artisan make:command ImportCsvData

    /**
     * @param array $data
     * @param Doctor $doctor
     * @return void
     */
    private function fill_doctor(array $data, Doctor $doctor): void
    {
        $doctor->firstName = $data['firstName'];
        $doctor->name = $data['name'];
        $doctor->lastName = $data['lastName'];
        $doctor->sex = $data['sex'];
        $doctor->hospital = $data['hospital'];
        $doctor->speciality = $data['speciality'];
        $doctor->location = $data['location'];
        $doctor->isDoctor = $data['isDoctor'];
        //$doctor->lastUpdate = $data['lastUpdate'];
        $doctor->save();
    }


    private function add_doctor(array $data): void
    {
        $doctor = new Doctor();
        $this->fill_doctor($data, $doctor);

        $phoneNumbers = $data['phoneNumbers'];
        foreach ($phoneNumbers as $phoneNumber) {
            $phone = new PhoneNumber();
            $phone->phoneNumber = $phoneNumber;
            $phone->doctorId = $doctor->id;
            $phone->save();
        }

        $emailAddresses = $data['emails'];
        foreach ($emailAddresses as $emailAddress) {
            $email = new EmailAddress();
            $email->email = $emailAddress;
            $email->doctorId = $doctor->id;
            $email->save();
        }
    }
}
