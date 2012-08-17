<?php
 use Behat\Behat\Context\BehatContext;
    use Behat\Gherkin\Node\PyStringNode;

    use Behat\Mink\Mink,
        Behat\Mink\Session,
        Behat\Mink\Driver\Selenium2Driver,
        Behat\MinkExtension\Context\MinkContext;

    use Selenium\Client as SeleniumClient;

    require_once 'PHPUnit/Autoload.php';
    require_once 'PHPUnit/Framework/Assert/Functions.php';

    class GuiContext extends MinkContext
    {
    
/**
     * @Given /^wait (\d+) seconds?$/
     */
    public function waitSeconds($arg1)
    {
        $this->getSession()->wait(1000*$arg1);
    }

    }

    