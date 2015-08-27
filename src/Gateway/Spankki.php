<?php
namespace FpiApi\Gateway;
use FpiApi\Gateway\Crosskey;

/**
 * Gateway for S-Pankki
 * 
 */
class Spankki extends Crosskey {
  
  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
    $this->name = "S-Pankki";
    $this->postUrl = 'https://online.s-pankki.fi/service/paybutton';
    $this->queryUrl = 'https://online.s-pankki.fi/service/paymentquery';
  }
  
}
