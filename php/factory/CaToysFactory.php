<?php
class CaToysFactory extends ToysFactory {

  public function createToy($toyName) {
    $toy = null;

    if ('car' == $toyName) {
      $toy = new CaCar();
    } else if ('helicopter' == $toyName) {
      $toy = new CaHelicopter();
    }

    return $toy;
  }
}
?>
