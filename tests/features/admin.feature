Feature: Admin Dashboard
  In order to configure the site
  As anyone
  I want to access and use the admin dashboard

  Scenario: Dashboard
    Given I am on the dashboard
    Then I should see "Return to site"
    And I should see "Dashboard"

  Scenario: Return to site
    Given I am on the dashboard
    And I click "Return to site"
    Then I should be on the homepage