<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Mink\Selector\CssSelector;
use Behat\Mink\Selector\SelectorsHandler;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I am on the dashboard
     */
    public function iAmOnTheDashboard()
    {
        $this->visitPath('/admin');
    }

    /**
     * @Given I click :arg1
     *
     * @param $arg1 Text of the link
     */
    public function iClick($arg1)
    {
        $session = $this->getSession()->getPage();

        $link = $session->find('xpath', '//span[text()=\''. $arg1 .'\']');

        $link->getParent()->click();
    }
}
