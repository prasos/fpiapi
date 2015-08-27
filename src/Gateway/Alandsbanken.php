<?php
namespace FpiApi\Gateway;

use FpiApi\Gateway\Crosskey;

/**
 * Gateway for Ålandsbanken
 */
class Alandsbanken extends Crosskey {
  
  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
    $this->name = "Ålandsbanken";
    $this->postUrl = 'https://online.alandsbanken.fi/service/paybutton';
    $this->queryUrl = 'https://online.alandsbanken.fi/service/paymentquery';
  }
  
}