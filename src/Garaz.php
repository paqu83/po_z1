<?php

namespace Drupal\po_z1;

/**
 * Class Garaz.
 * @package Drupal\po_z1
 */
class Garaz {

  private string $adres;
  private int $pojemnosc;
  private int $liczbaSamochodow = 0;
  private array $samochody = [];

  /**
   * @return mixed
   */
  public function getAdres() {
    return $this->adres;
  }

  /**
   * @param mixed $adres
   */
  public function setAdres($adres): void {
    $this->adres = $adres;
  }

  /**
   * @return mixed
   */
  public function getPojemnosc() {
    return $this->pojemnosc;

  }

  /**
   * @param mixed $pojemnosc
   */
  public function setPojemnosc($pojemnosc): void {
    $this->pojemnosc = $pojemnosc;
    // W php nie ma konieczności deklaracji wielkości tablicy samochody.
  }

  /**
   * Garaz constructor.
   * @param string $adres
   * @param int $pojemnosc
   */
  public function __construct(string $adres = '', int $pojemnosc = 0) {
    $this->adres = $adres;
    $this->pojemnosc = $pojemnosc;
    // W php nie ma konieczności deklaracji wielkości tablicy samochody.
  }

  /**
   * @param Samochod $samochod
   * @return bool
   */
  public function wprowadzSamochod(Samochod $samochod): bool {
    if (count($this->samochody) >= $this->pojemnosc) {
      return FALSE;
    }
    $this->samochody[] = $samochod;
    $this->liczbaSamochodow = count($this->samochody);
    return TRUE;
  }

  /**
   * @return Samochod|bool
   */
  public function wyprowadzSamochod() {
    if (empty($this->samochody)) {
      return FALSE;
    }
    $samochod = array_pop($this->samochody);
    $this->liczbaSamochodow = count($this->samochody);
    return $samochod;
  }

  /**
   * @return void
   */
  public function wypiszInfo(): void {
    print_r($this);
  }

}
