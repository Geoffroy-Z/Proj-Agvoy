<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $arrival;

    /**
     * @ORM\Column(type="date")
     */
    private $departure;

    /**
     * @ORM\Column(type="boolean")
     */
    private $confirmed;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $updatedUnavailibilities;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $additional_info;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Room", inversedBy="reservations")
     */
    private $room;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArrival(): ?\DateTimeInterface
    {
        return $this->arrival;
    }

    public function setArrival(\DateTimeInterface $arrival): self
    {
        $this->arrival = $arrival;

        return $this;
    }

    public function getDeparture(): ?\DateTimeInterface
    {
        return $this->departure;
    }

    public function setDeparture(\DateTimeInterface $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    public function getConfirmed(): ?bool
    {
        return $this->confirmed;
    }

    public function setConfirmed(bool $confirmed): self
    {
        $this->confirmed = $confirmed;

        return $this;
    }
    
    public function getUpdatedUnavailibilities(): ?bool
    {
        return $this->updatedUnavailibilities;
    }
    
    public function setUpdatedUnavailibilities(bool $updatedUnavailibilities): self
    {
        $this->updatedUnavailibilities = $updatedUnavailibilities;
        
        return $this;
    }

    public function getAdditionalInfo(): ?string
    {
        return $this->additional_info;
    }

    public function setAdditionalInfo(?string $additional_info): self
    {
        $this->additional_info = $additional_info;

        return $this;
    }

    public function getRoom(): ?Room
    {
        return $this->room;
    }

    public function setRoom(?Room $room): self
    {
        $this->room = $room;

        return $this;
    }
}
