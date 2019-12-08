<?php

defined('BASEPATH') OR exit('No direct script access allowed');



require_once 'php-sms/ZenophSMSGH/lib/ZenophSMSGH.php';

class Phpsms extends ZenophSMSGH {

    public function __construct() {
        parent::__construct();
    }

    public function sendmsg($num, $msg) {
        try {
            $zs = new ZenophSMSGH();
            $zs->setUser('0554apana@gmail.com');
            $zs->setPassword('apana1jude1');
            
        }catch(Exception $e){
               $e = 'Admin SMS system Failed Username Or Password Incorrect =>User Not Created';
               return $e;
        }
        try{
// set other parameters.
            $zs->setMessageType(ZenophSMSGH_MESSAGETYPE::TEXT);
            $zs->setSenderId('Dbtsms');
            $zs->SetMessage($msg);
// add destinations.
            $zs->addDestination($num);
// send the message.
        }catch (Exception $e){
          $e = 'Admin Telephone Number Entered Is Incorrect Please Check It =>User Not Created';
          return $e;
        }
        try{
            $response = $zs->sendMessage();
        } catch (Exception $exc) {
          $e = 'Admin Please Occurred SMS Credit Is Completely Consumed Or You Have no Internet Connection =>User Not Created';
          return $e;
        }
    }

}
?>

