<?php
/**
    Telerivet_AirtimeTransaction
    
    Represents a transaction where airtime is sent to a mobile phone number.
    
    To send airtime, first [create a Custom Actions service to send a particular amount of
    airtime](/dashboard/add_service?subtype_id=main.service.rules.contact&action_id=main.rule.sendairtime),
    then trigger the service using [service.invoke](#Service.invoke),
    [project.sendBroadcast](#Project.sendBroadcast), or
    [project.scheduleMessage](#Project.scheduleMessage).
    
    Fields:
    
      - id
          * ID of the airtime transaction
          * Read-only
      
      - to_number
          * Destination phone number in international format (no leading +)
          * Read-only
      
      - operator_name
          * Operator name
          * Read-only
      
      - country
          * Country code
          * Read-only
      
      - status
          * Current status of airtime transaction (`successful`, `failed`, `cancelled`,
              `queued`, `pending_approval`, or `pending_payment`)
          * Read-only
      
      - status_text
          * Error or success message returned by airtime provider, if available
          * Read-only
      
      - value
          * Value of airtime sent to destination phone number, in units of value_currency
          * Read-only
      
      - value_currency
          * Currency code of price
          * Read-only
      
      - price
          * Price charged for airtime transaction, in units of price_currency
          * Read-only
      
      - price_currency
          * Currency code of price
          * Read-only
      
      - contact_id
          * ID of the contact the airtime was sent to
          * Read-only
      
      - service_id
          * ID of the service that sent the airtime
          * Read-only
      
      - project_id
          * ID of the project that the airtime transaction belongs to
          * Read-only
      
      - vars (associative array)
          * Custom variables stored for this transaction
          * Updatable via API
*/
class Telerivet_AirtimeTransaction extends Telerivet_Entity
{
    function getBaseApiPath()
    {
        return "/projects/{$this->project_id}/airtime_transactions/{$this->id}";
    }
}
