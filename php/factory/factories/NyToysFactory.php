<?php
class NyToysFactory extends ToysFactory {

  public function createToy($toyName) {
    $toy = null;

    $nyComponentsFactory = new NyComponentsFactory();

    if ('car' == $toyName) {
      $toy = new NyCar($nyComponentsFactory);
    } else if ('helicopter' == $toyName) {
      $toy = new NyHelicopter($nyComponentsFactory);
    }

    return $toy;
  }
}
?>
