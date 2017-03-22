<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    new Testing_Selenium("*chrome", "http://selite.github.io/");
    $this->open("/TroubleShooting");
    $this->openWindow("https://developer.mozilla.org/en-US/Add-ons/Setting_up_extension_development_environment#Development_profile", "");
    $this->selectPopUp("");
    $this->waitForPageToLoad("30000");
    $this->close();
    $this->selectWindow("null");
    $this->open("/TroubleShooting");
  }
}
?>