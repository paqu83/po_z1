<?php

namespace Drupal\Tests\po_za1\Unit;

use Drupal\po_z1\Garaz;
use Drupal\po_z1\Samochod;
use Drupal\Tests\UnitTestCase;

/**
 * Class Cwiczenie12Test.
 * @package Drupal\Tests\po_za1\Unit
 */
class Cwiczenie12Test extends UnitTestCase {

  /**
   * Test methods for cw 1.
   */
  public function testAll() {
    $samochod_1 = new Samochod("Fiat", "126p", 2, 650, 6.0);
    $samochod_2 = new Samochod("Syrena", "105", 2, 800, 7.6);

    $garaz_1 = new Garaz();
    $garaz_1->setAdres("ul. Garażowa 1");
    $garaz_1->setPojemnosc(1);

    $garaz_2 = new Garaz("ul. Garażowa 2", 2);

    $this->assertTrue($garaz_1->wprowadzSamochod($samochod_1));
    $this->assertFalse($garaz_1->wprowadzSamochod($samochod_2));

    $this->assertTrue($garaz_2->wprowadzSamochod($samochod_1));
    $this->assertTrue($garaz_2->wprowadzSamochod($samochod_2));

    $this->assertInstanceOf(Samochod::class, $garaz_2->wyprowadzSamochod());
    $this->assertInstanceOf(Samochod::class, $garaz_2->wyprowadzSamochod());
    $this->assertFalse($garaz_2->wyprowadzSamochod());

  }

}
