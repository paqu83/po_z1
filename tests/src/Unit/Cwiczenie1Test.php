<?php

namespace Drupal\Tests\po_za1\Unit;

use Drupal\po_z1\Samochod;
use Drupal\Tests\UnitTestCase;

/**
 * Class Cwiczenie1Test.
 * @package Drupal\Tests\po_za1\Unit
 */
class Cwiczenie1Test extends UnitTestCase {

  /**
   * Test methods for cw 1.
   */
  public function testObliczKosztPrzejazdu() {

    $samochod = new Samochod('Toyota', 'Corolla', 50, 1599, 6.8);
    $return = $samochod->obliczKosztPrzejazdu(100, 10);
    $this->assertEquals(68, $return);

    $return = $samochod->obliczKosztPrzejazdu(200, 5);
    $this->assertEquals(68, $return);
  }

}
