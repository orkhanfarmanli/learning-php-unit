<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    protected $user;

    /**
     *
     * Create user before every test function
     * this is like setting up login before starting any test
     *
     */

    public function setUp()
    {
        $this->user = new User;
    }

    public function testThatWeGetTheFirstName()
    {
        $this->user->setFirstName("Malik");

        $this->assertEquals($this->user->getFirstname(), "Malik");
    }

    public function testThatWeGetTheLastName()
    {
        $this->user->setLastName("Dırhadiyye");

        $this->assertEquals($this->user->getLastname(), "Dırhadiyye");
    }

    public function testFullNameIsReturned()
    {
        $this->user->setFirstName("Malik");
        $this->user->setLastName("Dırhadiyye");

        $this->assertEquals($this->user->getFullName(), 'Malik Dırhadiyye');
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $this->user->setFirstName("   Malik     ");
        $this->user->setLastName("  Dırhadiyye      ");

        $this->assertEquals($this->user->getFirstname(), "Malik");
        $this->assertEquals($this->user->getLastname(), "Dırhadiyye");
    }

    public function testEmailAddressCanBeSet()
    {
        $this->user->setEmail('billy@temalar.com');

        $this->assertEquals($this->user->getEmail(), 'billy@temalar.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $this->user->setFirstName("Malik");
        $this->user->setLastName("Dırhadiyye");
        $this->user->setEmail('billy@temalar.com');

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Malik Dırhadiyye');
        $this->assertEquals($emailVariables['email'], 'billy@temalar.com');
    }
}
