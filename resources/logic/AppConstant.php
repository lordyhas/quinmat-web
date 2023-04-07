<?php
namespace AppUtils;

class AppConstant
{
    static string $name = "QUINMAT";
    static string $mail = "info@quinmat.com";
    static string $contact = "+243 770 001 234";

}

class WebsiteState{

    public bool $under_maintenance = false;
    public function is_under_maintenance(): bool|null
    {
        return false;
    }
}
