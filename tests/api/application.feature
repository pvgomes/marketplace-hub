Feature: Application
  In order to access the application
  As a client
  I need to be able make requests into it
  @application
  Scenario: Request endpoint without required headers
    When I send a GET request to "/api/v1/ping"
    Then the response code should be 200