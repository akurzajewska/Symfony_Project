<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * @ORM\Table(name=app_customer)
 * @ORM\Entity()
 */
class Customer
{
    /**
     * @var integer/null
     */
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy("AUTO)
     */
    private $id;

    /**
     * @var string/null
     */
    /**
     * @ORM\Column(name="email", type="string", length=180)
     */
    private $email;

    /**
     * @var string/null
     */
    /**
     * @ORM\Column(name="phone_number", type="string", length=50)
     */
    private $phone_number;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number): void
    {
        $this->phone_number = $phone_number;
    }

}