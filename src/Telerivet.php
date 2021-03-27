<?php

namespace Epmnzava\Telerivet;

use Epmnzava\Telerivet\Api\TelerivetApi;
use Epmnzava\Telerivet\Models\SendSmsResponse;

class Telerivet extends TelerivetApi
{

    private $project_id;
    private $authorization;
    private $url;



    /**
     * @param $to this is a mobile number / msisdn /recepient
     * @param string $message
     *
     */
    public function send_sms($recipent,string $message){


        $this->project_id=config('telerivet.project_id');
        $this->authorization=base64_encode(config("telerivet.api_key"));

        $message=[
            "content"=>$message,
            "to"=>$recipent
        ];

        $this->url=config('telerivet.base_url').''.$this->getProjectIDPath()."/messages/send";
       $response=$this->sendSmsRequest($this->url,$message,$this->authorization);

       $res=new SendSmsResponse($response);

       return $res;

    }


    public function getProjectIDPath(){
        return "/projects/".$this->project_id;
    }

    public function receivingSms(){

    }

}
