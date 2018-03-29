<?php
namespace FpiApi;
use FpiApi\FpiapiException;
use FpiApi\Transaction;

/**
 *
 * FpiAPI main factory class
 *
 * TODO: Ability to give default settings to the gateways via factory methods
 *
 */
class Factory {


  private static $included = array(); // booleans for file inclusions

  /**
   * getGateway
   * Get geteway object by name
   * @param string $gatewayName
   * @throws Exception
   */
  static public function getGateway($gatewayName) {

    if (!isset(self::$included['gateway'])) {
      require "Gateway/Gateway.php";
      self::$included['gateway'] = true;
    }

    $dir = dirname(__FILE__)."/Gateway/";
    $file = $dir . $gatewayName . ".php";

    $className = ucwords($gatewayName);

    if (!isset(self::$included[$gatewayName])) {
      if (file_exists($file)) {
        require($file);
       } else {
        throw new FpiapiException("No such gateway as " . $gatewayName);
      }
    }

    $className = '\\FpiApi\\Gateway\\' . $className;
    return new $className();

  }


}
