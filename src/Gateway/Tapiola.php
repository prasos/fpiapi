<?php
namespace FpiApi\Gateway;
use FpiApi\Gateway\Crosskey;

/**
 * 
 * Gateway for Tapiola
 *
 */
class Tapiola extends Crosskey {
  
  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
    $this->name = "Tapiola";
    $this->postUrl = 'https://pankki.tapiola.fi/service/paybutton';
    $this->queryUrl = 'https://pankki.tapiola.fi/service/paymentquery';
  }
  
}
