<?php

use PHPUnit\Framework\TestCase;

require_once 'includes/User.class.php'; // Make sure to include the User class file

class UserTest extends TestCase
{
    public function testCreateUser()
    {
        // Mock the Database class
        $databaseMock = $this->createMock(Database::class);
        $connMock = $this->createMock(PDO::class);
        $queryMock = $this->createMock(PDOStatement::class);

        // Set up the expectations for the mock objects
        $databaseMock->expects($this->once())
            ->method('get_connection')
            ->willReturn($connMock);

        $connMock->expects($this->once())
            ->method('prepare')
            ->with("INSERT INTO USER (name, lastname, username, pass) VALUES (:name, :last_name, :username, :pass)")
            ->willReturn($queryMock);

        $queryMock->expects($this->exactly(4))
            ->method('bindParam')
            ->willReturn(true);

        $queryMock->expects($this->once())
            ->method('execute')
            ->willReturn(true);

        // Call the method being tested
        $result = User::create_user('John', 'Doe', 'johndoe', 'password123');

        
    }


}