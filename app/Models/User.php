<?php

namespace App\Models;

class User
{

    public $firstName;
    public $lastName;
    public $email;

    /**
     *
     * Set the first name of the user
     *
     */

    public function setFirstName($firstName)
    {
        $this->firstName = trim($firstName);
    }

    /**
     *
     * Set the last name of the user
     *
     */

    public function setLastName($lastName)
    {
        $this->lastName = trim($lastName);
    }

    /**
     *
     * Set the email of the user
     *
     */

    public function setEmail($email)
    {
        $this->email = trim($email);
    }

    /**
     *
     * Get the first name of the user
     *
     */

    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     *
     * Get the last name of the user
     *
     */

    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     *
     * Get the email of the user
     *
     */

    public function getEmail()
    {
        return $this->email;
    }

    /**
     *
     * Get the full name of the user
     *
     */

    public function getFullName()
    {
        return "$this->firstName $this->lastName";
    }

    /**
     *
     * Get the email variables of the user
     *
     */

    public function getEmailVariables()
    {
        return [
            'full_name' => $this->getFullName(),
            'email' => $this->getEmail(),
        ];
    }

}
