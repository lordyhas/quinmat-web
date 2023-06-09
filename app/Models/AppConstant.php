<?php

namespace App\Models;

use App\Manifest\CountryName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppConstant extends Model
{
    use HasFactory;
    public string $name = "QUINMAT";
    public string $mail = "info@quinmat.com";
    public string $contact = "(+243) 824 130 000";
    //public string $number = $contact;
    public string $address = "650 Avenue Moëro, Lubumbashi";
    public string $country = "République Démocratique du Congo";
    public string $country_short = "Congo-Kinshasa";
    public string $country_sigle = "RDC";
    public string $facebook = "https://web.facebook.com/Quinmatlshi/";
    public string $instagram = "https://www.instagram.com/quinmat";
    public string $twitter = "https://twitter.com/QuinmatS";
    public string $linkedin = "https://www.linkedin.com/in/quinmat";



    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @return string
     */
    public function getContact(): string
    {
        return $this->contact;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getCountry(CountryName|null $type): string
    {
        return match ($type) {
            CountryName::full => $this->country,
            CountryName::short => $this->country_short,
            CountryName::single => $this->country_sigle,
        };

    }


    /**
     * @return string
     */
    public function getFacebook(): string
    {
        return $this->facebook;
    }

    /**
     * @return string
     */
    public function getInstagram(): string
    {
        return $this->instagram;
    }

    /**
     * @return string
     */
    public function getTwitter(): string
    {
        return $this->twitter;
    }

    /**
     * @return string
     */
    public function getLinkedin(): string
    {
        return $this->linkedin;
    }

}
