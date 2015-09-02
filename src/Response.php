<?php
namespace FpiApi;
use FpiApi\Transaction;
/**
 * 
 * FpiAPI query class
 *
 * returned 
 *
 */

class Response {
  
  
  private $uid; // Unique numeric ID that identifies this transaction
  private $bankArchiveId;
  private $version; // Protocol version
  private $referenceNumber; // Reference number calculated from the uid
  private $mac; // Reference number calculated from the uid
  
  
  /**
   * setUid
   * Set the transactions unique indentifier
   * This value is used to calculate the reference number
   * @param string $uid
   */
  public function setUid($uid) {
      $this->uid = $uid;
  }
  
  /**
   * getUid
   * Get the transactions unique identifier
   * Enter description here ...
   */
  public function getUid() {
      return $this->uid;
  }
  
  /**
   * setArchiveId
   * Set the bank archive id for the transaction
   * @param string $s
   */
  public function setArchiveId($s) {
      $this->bankArchiveId = $s;
  }
  
  /**
   * getArchiveId
   * Get the bank archive id for the transaction
   */
  public function getArchiveId() {
      return $this->bankArchiveId;
  }
  
  /**
   * setVersion
   * Set the version for the transaction
   * @param string $s
   */
  public function setVersion($s) {
      $this->version = $s;
  }
  
  /**
   * getVersion
   * Get the version for the transaction
   */
  public function getVersion() {
      return $this->version;
  }
  
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
   * Get the reference number for the transaction
   * @param $reference
   */
  public function getReferenceNumber() {
    return $this->referenceNumber;
  }

  /**
   * setMac()
   * Set the mac
   * @param $reference
   */
  public function setMac($mac) {
      $this->mac = $mac;
  }
  
  /**
   * getMac()
   * Get the mac
   * @param $reference
   */
  public function getMac() {
      return $this->mac;
  }
  
  
}


 