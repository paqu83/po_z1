<?php

namespace Drupal\po_z1;

class Samochod {

  private string $marka;

  private string $model;

  private int $iloscDrzwi;

  private int $pojemnoscSilnika;

  private float $srednieSpalanie;

  private static int $iloscSamochodow = 0;

  /**
   * Samochod constructor.
   *
   * @param string $marka
   * @param string $model
   * @param int $ilosc_drzwi
   * @param int $pojemnosc_silnika
   * @param float $srednie_spalanie
   */
  public function __construct(string $marka='nieznana', string $model='nieznany', int $ilosc_drzwi=0, int $pojemnosc_silnika=0, float $srednie_spalanie=0.0) {
    $this->marka = $marka;
    $this->model = $model;
    $this->iloscDrzwi = $ilosc_drzwi;
    $this->pojemnoscSilnika = $pojemnosc_silnika;
    $this->srednieSpalanie = $srednie_spalanie;
    self::$iloscSamochodow++;
  }

  /**
   * @param float $dlugosc_trasy
   * @return float
   */
  private function obliczSpalanie(float $dlugosc_trasy): float {
    return ($this->srednieSpalanie * $dlugosc_trasy) / 100;
  }

  /**
   * @param float $dlugosc_trasy
   * @param float $cena_paliwa
   * @return float
   */
  public function obliczKosztPrzejazdu(float $dlugosc_trasy, float $cena_paliwa): float {
    return $this->obliczSpalanie($dlugosc_trasy) * $cena_paliwa;
  }

  /**
   * Print all object info.
   */
  public function wypiszInfo(): void {
    print_r($this);
  }

  /**
   * Print static ilsocSamochodow.
   */
  public static function wypiszIloscSamochodow(): void {
    echo self::$iloscSamochodow;
  }

  /**
   * @return string
   */
  public function getMarka(): string {
    return $this->marka;
  }

  /**
   * @param string $marka
   */
  public function setMarka(string $marka): void {
    $this->marka = $marka;
  }

  /**
   * @return string
   */
  public function getModel(): string {
    return $this->model;
  }

  /**
   * @param string $model
   */
  public function setModel(string $model): void {
    $this->model = $model;
  }

  /**
   * @return int
   */
  public function getIloscDrzwi(): int {
    return $this->iloscDrzwi;
  }

  /**
   * @param int $iloscDrzwi
   */
  public function setIloscDrzwi(int $iloscDrzwi): void {
    $this->iloscDrzwi = $iloscDrzwi;
  }

  /**
   * @return int
   */
  public function getPojemnoscSilnika(): int {
    return $this->pojemnoscSilnika;
  }

  /**
   * @param int $pojemnoscSilnika
   */
  public function setPojemnoscSilnika(int $pojemnoscSilnika): void {
    $this->pojemnoscSilnika = $pojemnoscSilnika;
  }

  /**
   * @return float
   */
  public function getSrednieSpalanie(): float {
    return $this->srednieSpalanie;
  }

  /**
   * @param float $srednieSpalanie
   */
  public function setSrednieSpalanie(float $srednieSpalanie): void {
    $this->srednieSpalanie = $srednieSpalanie;
  }

}
