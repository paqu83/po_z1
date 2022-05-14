<?php

namespace Drupal\po_z1;

/**
 * Class Osoba
 * @package Drupal\po_z1
 */
class Osoba {
  private string $imie;
  private string $nazwisko;
  private string $adresZamieszkania;
  private int $maxIloscSamochodow = 3;
  private array $samochody = [];

  /**
   * @param string $imie
   * @param string $nazwisko
   * @param string $adres
   * @param int $iloscSamochodow
   */
  public function __construct(string $imie = 'nieznane', string $nazwisko = 'nieznane', string $adres = 'nieznany') {
    $this->imie = $imie;
    $this->nazwisko = $nazwisko;
    $this->adresZamieszkania = $adres;
  }

  /**
   * @param string $numer_rejestracyjny
   * @return bool
   */
  public function dodajSamochod(string $numer_rejestracyjny): bool {
    if (count($this->samochody) >= $this->maxIloscSamochodow) {
      return FALSE;
    }
    $this->samochody[$numer_rejestracyjny] = TRUE;
    // W PHP proponuję pominąć licznik posiadanych samochodów -
    // wynika to bezpośrednio z tablicy.
    return TRUE;
  }

  /**
   * @param string $numer_rejestracyjny
   * @return bool
   */
  public function usunSamochod(string $numer_rejestracyjny): bool {
    if (empty($this->samochody[$numer_rejestracyjny])) {
      return FALSE;
    }
    unset($this->samochody[$numer_rejestracyjny]);
    return TRUE;
  }

  /**
   * Debug print all info.
   */
  public function wypiszInfo(): void {
    print_r($this);
  }

}
