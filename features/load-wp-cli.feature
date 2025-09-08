Feature: Test that FP-CLI loads.

  Scenario: FP-CLI loads for your tests
    Given a FP install

    When I run `fp eval 'echo "Hello world.";'`
    Then STDOUT should contain:
      """
      Hello world.
      """
