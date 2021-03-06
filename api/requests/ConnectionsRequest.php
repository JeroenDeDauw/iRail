<?php

  /**
   * This is the data structure for a request. If we get more arguments, we will be able to add those here.
   *
   * @author pieterc
   */
include_once("Request.php");

class ConnectionsRequest extends Request {
     protected $results;
     protected $from;
     protected $to;
     protected $time;
     protected $date;
     protected $timeSel;
     protected $typeOfTransport;
     function __construct(){
	  parent::__construct();
	  parent::setGetVar("from", "");
	  parent::setGetVar("to", "");
	  parent::setGetVar("results", 6);
	  parent::setGetVar("date", date("dmy"));
	  parent::setGetVar("time", date("Hi"));
	  parent::setGetVar("timeSel","depart");
	  parent::setGetVar("typeOfTransport", "train");
	  parent::processRequiredVars(array("from", "to"));

//reform date and time to wanted structure for hafas and railtime
	  preg_match("/(..)(..)(..)/si", $this->date, $m);
	  $this->date = "20" . $m[3] . $m[2] . $m[1];
	  preg_match("/(..)(..)/si", $this->time, $m);
	  $this->time = $m[1] . ":" . $m[2];
     }
    
     public function getResults() {
	  return $this->results;
     }

     public function getFrom() {
	  return $this->from;
     }

     public function getTo() {
	  return $this->to;
     }

     public function getTime() {
	  return $this->time;
     }

     public function getDate() {
	  return $this->date;
     }

     public function getTimeSel() {
	  return $this->timeSel;
     }

     public function getTypeOfTransport() {
	  return $this->typeOfTransport;
     }


}
?>
