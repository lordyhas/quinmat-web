<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Doctor;
use App\Models\EmailAddress;
use App\Models\PhoneNumber;
use Illuminate\Http\JsonResponse;


class DoctorController extends Controller
{
    public function create(DoctorRequest $request) : JsonResponse
    {
        if(!$request->has('data') && $request->has('auth')) return response()->json([
            "success" => false,
            "message"=> "failed : no data received",
        ]);
        $data = $request->input('data');

        $this->add_doctor($data);

        return response()->json([
            "success" => true,
            "message"=> "Doctor saved successfully",
        ]);
    }

    public function store(DoctorRequest $request) : JsonResponse
    {
        if(!$request->has('id') && $request->has('auth')) return response()->json([
            "success" => false,
            "message"=> "failed : no id received",
        ]);
        if(!$request->has('data')) return response()->json([
            "success" => false,
            "message"=> "failed : no data received",
        ]);
        $data = $request->input('data');
        $doctor_id = $request->input('id');
        $doctor = Doctor::whereId($doctor_id);
        $this->fill_doctor($data, $doctor);

        return response()->json([
            "success" => true,
            "message"=> "Doctor(id:$doctor_id) saved successfully",
        ]);
    }

    public function show(DoctorRequest $request) : JsonResponse
    {
        if($request->has('where')){
            $data = $this->readOne($request);
        }else {
            $data = $this->readAll();
        }
        return response()->json([
            "success" => true,
            "data" => $data,
            "message" => "Doctor data sent successfully",
        ]);
    }

    public function show_only(DoctorRequest $request) : JsonResponse
    {
        $data = $this->readOne($request);

        return response()->json([
            "success" => true,
            "data" => $data,
            "message" => "Doctor data sent successfully",
        ]);
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

    /**
     * @param DoctorRequest $request
     * @return array
     */
    private function readOne(DoctorRequest $request) : array
    {
        $id = $request->input("id");
        $doctor = Doctor::whereId($id);
        return $doctor->toArray();

        //return ["message" => "request has not where parameter"];
    }

    // php artisan make:command ImportCsvData

    /**
     * @param array $data that contain doctor data
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
