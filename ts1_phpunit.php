<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://selite.github.io/");
  }

  public function testMyTestCase()
  {
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