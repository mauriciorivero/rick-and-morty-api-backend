<?php

use PHPUnit\Framework\TestCase;

class EpisodeCharacterTransactionTest extends TestCase
{
    public function testAsignRelation()
    {
        // Arrange
        $id_episode = 1;
        $id_character = 2;

        // Act
        $result = EpisodeCharacterTransaction::asign_relation($id_episode, $id_character);

        // Assert
        $this->assertTrue($result);
    }

    public function testGetAllCharacterByEpisode()
    {
        // Arrange
        $ep_id = 1;

        // Act
        $result = EpisodeCharacterTransaction::get_all_character_by_episode($ep_id);

        // Assert
        $this->assertNotEmpty($result);
        $this->assertInternalType('array', $result);
    }

    public function testGetAllEpisodeByCharacter()
    {
        // Arrange
        $ch_id = 1;

        // Act
        $result = EpisodeCharacterTransaction::get_all_episode_by_character($ch_id);

        // Assert
        $this->assertNotEmpty($result);
        $this->assertInternalType('array', $result);
    }

    public function testDeleteRelationshipInBetween()
    {
        // Arrange
        $ep_id = 1;
        $ch_id = 2;

        // Act
        $result = EpisodeCharacterTransaction::delete_relationship_in_between($ep_id, $ch_id);

        // Assert
        $this->assertTrue($result);
    }
}