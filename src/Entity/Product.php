<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $product_number;
    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $name;
    /**
     * @ORM\Column(type="float", length=6)
     * @Assert\NotBlank()
     * @Assert\Range(min = 0, minMessage = "Price must be higher than {{ limit }}")
     */
    private $price;
    /**
     * @ORM\Column(type="float", length=6)
     * @Assert\Range(min = 0, minMessage = "Price must be higher than {{ limit }}")
     */
    private $discount_price;
    /**
     * @ORM\Column(type="integer", length=4, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Range(min = -1, minMessage = "Quantity must be higher than {{ limit }}")
     */
    private $quantity;
    /**
     * @ORM\Column(type="date")
     * @Assert\Date
     */
    private $add_date;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $long_description;
    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $short_description;
    /**
     * @ORM\Column(type="date",nullable=true)
     * @Assert\Date
     */
    private $last_edit_date;
    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    private $discount_end_date;
    /**
     * @ORM\Column(type="integer", length=2)
     */
    private $warranty_time;
    /**
     * @ORM\Column(type="string", length=32)
     * @Assert\NotBlank()
     */
    private $type;

    public function getProductNumber(): ?int
    {
        return $this->product_number;
    }
    public function setProductNumber($number)
    {
        $this->product_number = $number;
    }
    public function setType($type)
    {
        if(!in_array($type, ProductTypes::getTypes())){
            throw new \InvalidArgumentException("Invalid type");
        }
        $this->type = $type;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setDiscountPrice($price)
    {
        $this->discount_price = $price;
    }
    public function getDiscountPrice()
    {
        return $this->discount_price;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setAddDate($date)
    {
        $this->add_date = $date;
    }
    public function getAddDate()
    {
        return $this->add_date;
    }
    public function setLongDescription($description)
    {
        $this->long_description = $description;
    }
    public function getLongDescription()
    {
        return $this->long_description;
    }
    public function setShortDescription($description)
    {
        $this->short_description = $description;
    }
    public function getShortDescription()
    {
        return $this->short_description;
    }
    public function setLastEdit($date)
    {
        $this->last_edit_date = $date;
    }
    public function getLastEdit()
    {
        return $this->last_edit_date;
    }
    public function setDiscountEndDate($date)
    {
        $this->discount_end_date = $date;
    }
    public function getDiscountEndDate()
    {
        return $this->discount_end_date;
    }
    public function setWarrantyTime($time)
    {
        $this->warranty_time = $time;
    }
    public function getWarrantyTime()
    {
        return $this->warranty_time;
    }
}
