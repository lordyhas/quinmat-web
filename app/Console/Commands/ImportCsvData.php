<?php

namespace App\Console\Commands;

use App\Models\Doctor;
use App\Models\EmailAddress;
use App\Models\PhoneNumber;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Iterator;
use League\Csv\Exception;
use League\Csv\Reader;


class ImportCsvData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-csv-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from a CSV file';

    /**
     * Execute the console command.
     *
     * @throws Exception
     */
    public function handle()
    {

        $data = $this->import_csv('app/data.csv');  //array_map('str_getcsv', file($file));

        $records = $data;
        foreach ($records as $record) {
            // Do something with the record
            // You can access the fields using the named keys
            $name = $record['name'];
            $email = $record['email'];
            $phone = $record['phone'];
        }

        foreach ($data as $row) {
            DB::table('doctors')->insert([
                'name' => $row[0],
                'email' => $row[1],
                'phone' => $row[2],
            ]);
        }

        /*$doctor = new Doctor();
        $doctor->first_name = $row['first_name'];
        $doctor->middle_name = $data['first_name'];
        $doctor->last_name = $data['first_name'];
        $doctor->save();

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
        }*/

        $this->info('Data imported successfully!');
    }

    /**
     * @throws Exception
     */
    public function import_csv(string $path): Iterator
    {

        $csv = Reader::createFromPath(storage_path('app/data.csv'));
        $csv->setHeaderOffset(0);


        return $csv->getRecords();


    }
}
