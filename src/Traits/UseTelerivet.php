<?php

namespace Epmnzava\Telerivet\Traits;

use Epmnzava\Telerivet\Api\TelerivetApi;
use Epmnzava\Telerivet\Models\SendSmsResponse;
use Epmnzava\Telerivet\Telerivet;


trait UseTelerivet
{

    public $send_to_contact;
    public $recived_from;
    public $message;
    public $id;
    public $phone_id;
    public $contact_id;
    public $direction;
    public $status;
    public $message_type;
    public $source;
    public $to_number;

    public function TelerivetSendSms($to, $message)
    {
        $sms = new Telerivet;

        $result = $sms->send_sms($to, $message);

        $response = json_decode($result);


        $formatted_response = [
            "id" => $response->id,

            "direction" => $response->direction,

            "contact_id" => $response->contact_id,

            "user_id" => $response->user_id,
            "to_number" => $response->to_number,
            "project_id" => $response->project_id,
            "from_number" => $response->from_number,
            "message_type" => $response->message_type

        ];


        return $formatted_response;
    }
}
