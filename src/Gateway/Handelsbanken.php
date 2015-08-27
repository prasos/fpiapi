<?php 
namespace FpiApi\Gateway;
use FpiApi\Gateway\Samlink;
/**
 * Gateway for Handelsbanken
 * 
 */

require_once "samlink.php";

class Handelsbanken extends Samlink {
  
  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
    $this->name = "Handelsbanken";
    $this->postUrl = 'https://verkkomaksu.handelsbanken.fi/vm/login.html';
    $this->queryUrl = 'https://verkkomaksu.handelsbanken.fi/vm/kysely.html'; 
    
  }
  
}

