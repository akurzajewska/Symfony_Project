<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

/*
 * @ORM\Table(name=app_cart)
 * @ORM\Entity()
 */
class Cart
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
     * @var DateTime
     */
    /**
     * @ORM\Column(name="date_time", type="datetime", length=100)
     */
    private $dateTime;

    /**
     * @var Customer
     */
    /**
     * @ORM\OneToOne(targetEntity="Customer")
     */
    private $customer;

    /**
     * @var Collection/Product[]
     */
    /**
     * @ORM\ManyToMany(targetEntity="Product")
     */
    private $products;

    #[Pure] public function __construct()
    {
        $this->products = new ArrayCollection();
    }
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
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param mixed $dateTime
     */
    public function setDateTime($dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param mixed $products
     */
    public function setProducts($products): void
    {
        $this->products = $products;
    }

}