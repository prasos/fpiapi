<?php 
namespace FpiApi\Gateway;
use FpiApi\Gateway\Samlink;

/**
 * Gateway for Säästöpankki
 */
class Sp extends Samlink {
  
  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
    $this->name = "Säästöpankki";
    $this->postUrl = 'https://verkkomaksu.saastopankki.fi/vm/login.html';
    $this->queryUrl = 'https://verkkomaksu.saastopankki.fi/vm/kysely.html'; 
  }
  
}