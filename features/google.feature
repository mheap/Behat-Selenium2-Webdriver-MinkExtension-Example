    Feature: Visit Google and search

    Scenario: Run a search for Behat
    	Given I am on "http://google.com/?complete=0"
    	When I fill in "lst-ib" with "Behat"
    	And I press "Google Search"
    	Then I should see "Behat — BDD for PHP" in the ".vsc:first-child a" element