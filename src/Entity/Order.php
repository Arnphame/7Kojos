<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", unique=true)
     */
    private $orderNumber;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date
     */
    private $date;
    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $clientName;
    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $clientSurname;
    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $clientIBAN;
    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $clientAddress;
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     */
    private $type;
    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $clientVAT;
    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $clientCC;
    /**
     * @ORM\Column(type="float", length=10, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Range(min = 0, minMessage = "Price must be higher than {{ limit }}")
     */
    private $sum;
    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     * @Assert\NotBlank()
     */
    private $deliveryAddress;

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * @param mixed $clientName
     */
    public function setClientName($clientName): void
    {
        $this->clientName = $clientName;
    }

    /**
     * @return mixed
     */
    public function getClientSurname()
    {
        return $this->clientSurname;
    }

    /**
     * @param mixed $clientSurname
     */
    public function setClientSurname($clientSurname): void
    {
        $this->clientSurname = $clientSurname;
    }

    /**
     * @return mixed
     */
    public function getClientIBAN()
    {
        return $this->clientIBAN;
    }

    /**
     * @param mixed $clientIBAN
     */
    public function setClientIBAN($clientIBAN): void
    {
        $this->clientIBAN = $clientIBAN;
    }

    /**
     * @return mixed
     */
    public function getClientAddress()
    {
        return $this->clientAddress;
    }

    /**
     * @param mixed $clientAddress
     */
    public function setClientAddress($clientAddress): void
    {
        $this->clientAddress = $clientAddress;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getClientVAT()
    {
        return $this->clientVAT;
    }

    /**
     * @param mixed $clientVAT
     */
    public function setClientVAT($clientVAT): void
    {
        $this->clientVAT = $clientVAT;
    }

    /**
     * @return mixed
     */
    public function getClientCC()
    {
        return $this->clientCC;
    }

    /**
     * @param mixed $clientCC
     */
    public function setClientCC($clientCC): void
    {
        $this->clientCC = $clientCC;
    }

    /**
     * @return mixed
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param mixed $sum
     */
    public function setSum($sum): void
    {
        $this->sum = $sum;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param mixed $deliveryAddress
     */
    public function setDeliveryAddress($deliveryAddress): void
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @return mixed
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * @param mixed $additionalInformation
     */
    public function setAdditionalInformation($additionalInformation): void
    {
        $this->additionalInformation = $additionalInformation;
    }
    /**
     * @ORM\Column(type="string", length=200)
     */
    private $additionalInformation;

}
