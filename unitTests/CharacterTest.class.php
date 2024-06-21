<?php

require_once('includes/Character.class.php');
require_once('includes/Database.class.php');

use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase
{
    public function testCreateCharacter()
    {
        $name = 'Test Character';
        $status = 'Alive';
        $species = 'Human';
        $gender = 'Male';
        $image = 'test.jpg';
        $created = '2020-01-01 00:00:00';
        $isActive = 1;

        $this->assertTrue(Character::create_character($name, $status, $species, $gender, $image, $created, $isActive));
    }

    public function testGetAllCharacters()
    {
        $result = Character::get_all_characters();
        $this->assertNotEmpty($result);
        $this->assertInternalType('array', $result);
    }

    public function testDeleteCharacterById()
    {
        $id = 1;
        $this->assertTrue(Character::delete_character_by_id($id));
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

        $this->assertTrue(Character::update_character_by_id($id, $name, $status, $species, $gender, $image, $isActive));
    }
}