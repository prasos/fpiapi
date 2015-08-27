<?php 
namespace FpiApi\Gateway;

use FpiApi\Gateway\Samlink;

/**
 * Gateway for Aktia
 */
class Aktia extends Samlink {
  
  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
    $this->name = "Aktia";
    $this->postUrl = 'https://auth.aktia.fi/vm';
    $this->queryUrl = 'https://ebank.aktia.fi/vmapi/kysely.html'; 
  }
  

}