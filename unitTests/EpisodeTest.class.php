<?php

require_once 'PHPUnit/Framework/TestCase.php';
require_once '../includes/Episode.class.php';

class EpisodeTest extends PHPUnit_Framework_TestCase
{
    public function testCreateEpisode()
    {
        $name = 'Test Episode';
        $air_date = '2020-01-01';
        $episode = 'S01E01';
        $created = '2020-01-01 00:00:00';
        $isActive = 1;

        $this->assertTrue(Episode::create_episode($name, $air_date, $episode, $created, $isActive));
    }

    public function testGetAllEpisodes()
    {
        $result = Episode::get_all_episodes();
        $this->assertNotEmpty($result);
        $this->assertInternalType('array', $result);
    }

    public function testDeleteCharacterById()
    {
        $id = 1;
        $this->assertTrue(Episode::delete_character_by_id($id));
    }

    public function testUpdateCharacterById()
    {
        $id = 1;
        $name = 'Test Character';
        $status = 'Alive';
        $species = 'Human';
        $gender = 'Male';
        $image = 'test.jpg';
        $isActive = 1;

        $this->assertTrue(Episode::update_character_by_id($id, $name, $status, $species, $gender, $image, $isActive));
    }
}