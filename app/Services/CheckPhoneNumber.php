<?php
namespace App\Services;

class CheckPhoneNumber {
    public $errorPhone = null;
    public function phoneNumber($phone)
    {
        if (
            9 < strlen($phone) 
            AND strlen($phone) < 11 
            AND is_numeric($phone) 
            AND $phone[0] == 0
            AND $phone[1] != 0
            )
        {
            return $phone;               
        }else{
            $this->errorPhone= $phone;
        }  
    }
}