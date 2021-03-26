<?php


namespace Epmnzava\Telerivet\Models;


class SendSmsResponse
{

    public $id;
    public $phone_id;
    public $contact_id;
    public $direction;
    public $status;
    public $message_type;
    public $source;
    public $time_created;
    public $time_sent;
    public $time_updated;
    public $from_number;
    public $to_number;
    public $content;
    public $starred;
    public $simulated;
    public $track_clicks;
    public $vars;
    public $external_id;
    public $label_ids;
    public $route_id;
    public $scheduled_id;
    public $broadcast_id;
    public $service_id;
    public $user_id;
    public $project_id;
    public $priority;




    /**
     * SendSmsResponse constructor.
     * @param $id
     * @param $phone_id
     * @param $contact_id
     * @param $direction
     * @param $status
     * @param $message_type
     * @param $source
     * @param $time_created
     * @param $time_sent
     * @param $time_updated
     * @param $from_number
     * @param $to_number
     * @param $content
     * @param $starred
     * @param $simulated
     * @param $track_clicks
     * @param $vars
     * @param $external_id
     * @param $label_ids
     * @param $route_id
     * @param $scheduled_id
     * @param $broadcast_id
     * @param $service_id
     * @param $user_id
     * @param $project_id
     * @param $priority
     */
    public function __construct($id, $phone_id, $contact_id, $direction, $status, $message_type, $source, $time_created, $time_sent, $time_updated, $from_number, $to_number, $content, $starred, $simulated, $track_clicks, $vars, $external_id, $label_ids, $route_id, $scheduled_id, $broadcast_id, $service_id, $user_id, $project_id, $priority)
    {
        $this->id = $id;
        $this->phone_id = $phone_id;
        $this->contact_id = $contact_id;
        $this->direction = $direction;
        $this->status = $status;
        $this->message_type = $message_type;
        $this->source = $source;
        $this->time_created = $time_created;
        $this->time_sent = $time_sent;
        $this->time_updated = $time_updated;
        $this->from_number = $from_number;
        $this->to_number = $to_number;
        $this->content = $content;
        $this->starred = $starred;
        $this->simulated = $simulated;
        $this->track_clicks = $track_clicks;
        $this->vars = $vars;
        $this->external_id = $external_id;
        $this->label_ids = $label_ids;
        $this->route_id = $route_id;
        $this->scheduled_id = $scheduled_id;
        $this->broadcast_id = $broadcast_id;
        $this->service_id = $service_id;
        $this->user_id = $user_id;
        $this->project_id = $project_id;
        $this->priority = $priority;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPhoneId()
    {
        return $this->phone_id;
    }

    /**
     * @param mixed $phone_id
     */
    public function setPhoneId($phone_id): void
    {
        $this->phone_id = $phone_id;
    }

    /**
     * @return mixed
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * @param mixed $contact_id
     */
    public function setContactId($contact_id): void
    {
        $this->contact_id = $contact_id;
    }

    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param mixed $direction
     */
    public function setDirection($direction): void
    {
        $this->direction = $direction;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * @param mixed $message_type
     */
    public function setMessageType($message_type): void
    {
        $this->message_type = $message_type;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getTimeCreated()
    {
        return $this->time_created;
    }

    /**
     * @param mixed $time_created
     */
    public function setTimeCreated($time_created): void
    {
        $this->time_created = $time_created;
    }

    /**
     * @return mixed
     */
    public function getTimeSent()
    {
        return $this->time_sent;
    }

    /**
     * @param mixed $time_sent
     */
    public function setTimeSent($time_sent): void
    {
        $this->time_sent = $time_sent;
    }

    /**
     * @return mixed
     */
    public function getTimeUpdated()
    {
        return $this->time_updated;
    }

    /**
     * @param mixed $time_updated
     */
    public function setTimeUpdated($time_updated): void
    {
        $this->time_updated = $time_updated;
    }

    /**
     * @return mixed
     */
    public function getFromNumber()
    {
        return $this->from_number;
    }

    /**
     * @param mixed $from_number
     */
    public function setFromNumber($from_number): void
    {
        $this->from_number = $from_number;
    }

    /**
     * @return mixed
     */
    public function getToNumber()
    {
        return $this->to_number;
    }

    /**
     * @param mixed $to_number
     */
    public function setToNumber($to_number): void
    {
        $this->to_number = $to_number;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getStarred()
    {
        return $this->starred;
    }

    /**
     * @param mixed $starred
     */
    public function setStarred($starred): void
    {
        $this->starred = $starred;
    }

    /**
     * @return mixed
     */
    public function getSimulated()
    {
        return $this->simulated;
    }

    /**
     * @param mixed $simulated
     */
    public function setSimulated($simulated): void
    {
        $this->simulated = $simulated;
    }

    /**
     * @return mixed
     */
    public function getTrackClicks()
    {
        return $this->track_clicks;
    }

    /**
     * @param mixed $track_clicks
     */
    public function setTrackClicks($track_clicks): void
    {
        $this->track_clicks = $track_clicks;
    }

    /**
     * @return mixed
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * @param mixed $vars
     */
    public function setVars($vars): void
    {
        $this->vars = $vars;
    }

    /**
     * @return mixed
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * @param mixed $external_id
     */
    public function setExternalId($external_id): void
    {
        $this->external_id = $external_id;
    }

    /**
     * @return mixed
     */
    public function getLabelIds()
    {
        return $this->label_ids;
    }

    /**
     * @param mixed $label_ids
     */
    public function setLabelIds($label_ids): void
    {
        $this->label_ids = $label_ids;
    }

    /**
     * @return mixed
     */
    public function getRouteId()
    {
        return $this->route_id;
    }

    /**
     * @param mixed $route_id
     */
    public function setRouteId($route_id): void
    {
        $this->route_id = $route_id;
    }

    /**
     * @return mixed
     */
    public function getScheduledId()
    {
        return $this->scheduled_id;
    }

    /**
     * @param mixed $scheduled_id
     */
    public function setScheduledId($scheduled_id): void
    {
        $this->scheduled_id = $scheduled_id;
    }

    /**
     * @return mixed
     */
    public function getBroadcastId()
    {
        return $this->broadcast_id;
    }

    /**
     * @param mixed $broadcast_id
     */
    public function setBroadcastId($broadcast_id): void
    {
        $this->broadcast_id = $broadcast_id;
    }

    /**
     * @return mixed
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * @param mixed $service_id
     */
    public function setServiceId($service_id): void
    {
        $this->service_id = $service_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param mixed $project_id
     */
    public function setProjectId($project_id): void
    {
        $this->project_id = $project_id;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param mixed $priority
     */
    public function setPriority($priority): void
    {
        $this->priority = $priority;
    }



}
