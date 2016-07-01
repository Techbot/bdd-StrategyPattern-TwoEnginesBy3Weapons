Feature: Test Round
  in order to play game
  As a player
  I need to attack my opponent with a weapon

  Rules :
  - The player with the highest dice roll plus weapon strength wins

  Scenario: Player prepares for attack
    Given I have a strength of '6'
    When I select Advanced
    Then I should get my total score


  Scenario: Player attacks
    Given I have a totalStrength of '16'
    When I attack an opponent
    Then I should get a result

  Scenario: Player loses attack
    Given I have a strength of '16'
    And my opponent has totalStrength of '34'
    When I lose an attack on an opponent
    Then I should have a strength of '15'

  Scenario: Player wins attack
    Given I have a strength of '16'
    And my opponent has totalStrength of '4'
    When I win an attack on an opponent
    Then I should have a strength of '17'