<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * @ORM\Table(name=app_product)
 * @ORM\Entity()
 */
class Product
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
     * @ORM\Column(name="code", type="string", length=100)
     */
    private $code;

    /**
     * @var string/null
     */
    /**
     * @ORM\Column(name="title", type="string", length=200)
     */
    private $title;

    /**
     * @var integer/null
     */
    /**
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }
}