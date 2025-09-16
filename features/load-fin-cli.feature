Feature: Test that FIN-CLI loads.

  Scenario: FIN-CLI loads for your tests
    Given a FIN install

    When I run `fin eval 'echo "Hello world.";'`
    Then STDOUT should contain:
      """
      Hello world.
      """
