<?php

namespace Drupal\Tests\po_za1\Unit;

use Drupal\po_z1\Osoba;
use Drupal\Tests\UnitTestCase;

/**
 * Class LabZad1Test.
 * @package Drupal\Tests\po_za1\Unit
 */
class LabZad1Test extends UnitTestCase {

  /**
   * Testing proposition.
   */
  public function testZad1() {
    $osoba_1 = new Osoba('Piotr', 'Pakulski', 'Polska');
    $osoba_1->dodajSamochod('ELA12345');
    $this->assertTrue($osoba_1->dodajSamochod('ELA12345'));
    $this->assertTrue($osoba_1->dodajSamochod('ELA12346'));
    $this->assertTrue($osoba_1->dodajSamochod('ELA12347'));
    $this->assertFalse($osoba_1->dodajSamochod('ELA12348'));

    // Not valid licens plate.
    $this->assertFalse($osoba_1->usunSamochod('ELA12348'));

    // Just remove.
    $this->assertTrue($osoba_1->usunSamochod('ELA12347'));
    $this->assertTrue($osoba_1->usunSamochod('ELA12346'));
    $this->assertTrue($osoba_1->usunSamochod('ELA12345'));

    // Array empty.
    $this->assertTrue($osoba_1->usunSamochod('XXXXXXX'));


  }

}
