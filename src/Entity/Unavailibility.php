<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnavailibilityRepository")
 */
class Unavailibility
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
    private $start;

    /**
     * @ORM\Column(type="date")
     */
    private $ending;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Room", inversedBy="unavailibilities")
     */
    private $room;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }
    
    public function getStartAsString(): ?string
    {
        return $this->start->format('Y-m-d');
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }
    

    public function getEnding(): ?\DateTimeInterface
    {
        return $this->ending;
    }
    
    public function getEndingAsString(): ?string
    {
        return $this->ending->format('Y-m-d');
    }

    public function setEnding(\DateTimeInterface $ending): self
    {
        $this->ending = $ending;

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
    
    public function __toString() {
        return (string) $this->getId();
    }
}
