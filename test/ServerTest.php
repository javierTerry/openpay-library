<?php

use OpenPay\Base\Server;

class ServerTest extends PHPUnit_Framework_TestCase {

  public function testConexion()
  {
    $server = new Server();
    $this->assertTrue($server -> conexion());
  }

}
?>