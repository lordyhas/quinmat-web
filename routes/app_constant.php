<?php
//namespace routes;


class AppConstant
{
    public string $name = "QUINMAT";
    public string $mail = "info@quinmat.com";
    public string $contact = "(+243) 824 130 000";
    //public string $number = $contact;
    public string $address = "650 Avenue Moëro, Lubumbashi";
    public string $country = "Republique Democratique du Congo";
    public string $country_short = "Congo-Kinshasa";
    public string $country_sigle = "RDC";

}
class WebsiteState{

    public bool $under_maintenance = false;
    public function is_under_maintenance(): bool|null
    {
        return null;
    }
}
