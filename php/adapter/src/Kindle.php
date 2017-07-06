<?php namespace Acme;

  Class Kindle implements eReaderInterface {

    public function turnOn()
    {
      var_dump('Turn the Kindle on.');
    }

    public function pressNextButton()
    {
      var_dump('Press the Kindle next button.');
    }
  }
?>
