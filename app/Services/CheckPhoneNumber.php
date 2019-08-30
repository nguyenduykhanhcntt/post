<?php
namespace App\Services;

use Illuminate\Validation\Validator;


class CheckPhoneNumber {
    public $errorPhone = null;
    public function phoneNumber($phone)
    {
        preg_match('#^([0-9]*)#', $phone, $oke);
        print_r($oke);
        echo count($oke);exit();
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
            return 'lỗi';
        }  
    }
}
