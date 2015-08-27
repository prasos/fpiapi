<?php
namespace FpiApi;
use FpiApi\Transaction;
/**
 * 
 * FpiAPI query class
 *
 * returned by gateways getQueryResult method 
 *
 */

class QueryResult extends Transaction {
  
  
  protected $referenceNumber; // querys reference number on the banks side (should match transactions ref.num)
  
  /**
   * setReferenceNumber()
   * Set the reference number
   * @param $reference
   */
  public function setReferenceNumber($ref) {
    $this->referenceNumber = $ref;
  }

  /**
   * getReferenceNumber()
   * Calculate reference number for the given number
   * @param $reference
   */
  public function getReferenceNumber() {
    return $this->referenceNumber;
  }
 
  
  
}


 