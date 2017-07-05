<?php

class ToysFactory {

  public $simpleFactory;

  public function __construct(SimpleFactory $simpleFactory) {
    $this->simpleFactory = $simpleFactory;
  }

  public function produceToys($toyName) {
    $toy = null;

    $toy = $this->simpleFactory->createToy($toyName);

    $toy->prepare();
    $toy->package();
    $toy->label();

    return $toy;
  }
}

?>
