<?php
namespace ooredooSMS;

class ooredooSMS{

    private $AthuKey;
    private $Bearer;
    private $UserName;

    public function __construct($AthuKey,$Bearer,$UserName){
        $this->AthuKey = $AthuKey;
        $this->UserName = $UserName;
        $this->Bearer = $Bearer;
    }

    public function sendSMS($phone_numbers,$message){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://o-papi1-lb01.ooredoo.mv/bulk_sms/v2');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $post = array(
            'username' => $this->UserName,
            'access_key' => $this->AthuKey,
            'message' => $message,
            'batch' => implode(' ',$phone_numbers)
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

        $headers = array();
        $headers[] = 'Authorization: Bearer '.$this->Bearer;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }else{
            return json_decode($result);
        }
        curl_close($ch);
    }
}