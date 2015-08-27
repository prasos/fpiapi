<?php 
namespace FpiApi\Gateway;
use FpiApi\Gateway\Samlink;

/**
 * Gateway for POP Pankki
 */
class Pop extends Samlink {
  
  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
    $this->name = "POP Pankki";
    $this->postUrl = 'https://verkkomaksu.poppankki.fi/vm/login.html';
    $this->queryUrl = 'https://verkkomaksu.poppankki.fi/vm/vm/kysely.html'; 
  }
  
}