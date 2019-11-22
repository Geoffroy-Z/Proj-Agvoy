<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 */
class Room
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $summary;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $capacity;

    /**
     * @ORM\Column(type="float")
     */
    private $superficy;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Owner", inversedBy="room")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Region", inversedBy="room")
     * @ORM\JoinColumn(nullable=false)
     */
    private $region;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="room")
     */
    private $reservations;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Unavailibility", mappedBy="room")
     */
    private $unavailibilities;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="room")
     */
    private $comments;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Paste", inversedBy="room", cascade={"persist", "remove"})
     */
    private $paste;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
        $this->unavailibilities = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }
    
    
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getSuperficy(): ?float
    {
        return $this->superficy;
    }

    public function setSuperficy(float $superficy): self
    {
        $this->superficy = $superficy;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    public function setOwner(?Owner $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }
    
/*     public function getRegionName(): ?string
    {
        $em = $this->getDoctrine()->getManager();
        $region_name = $em->getRepository(Region::class)->findOneBy(array('id' => $this->region))->getName();
        return $region;
    } */

    public function setRegion(Region $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function removeRegion(Region $region): self
    {
        if ($this->region->contains($region)) {
            $this->region->removeElement($region);
        }

        return $this;
    }
    
    public function __toString() {
        return (string) $this->getId();
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setRoom($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->contains($reservation)) {
            $this->reservations->removeElement($reservation);
            // set the owning side to null (unless already changed)
            if ($reservation->getRoom() === $this) {
                $reservation->setRoom(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Unavailibility[]
     */
    public function getUnavailibilities(): Collection
    {
        return $this->unavailibilities;
    }

    public function addUnavailibility(Unavailibility $unavailibility): self
    {
        if (!$this->unavailibilities->contains($unavailibility)) {
            $this->unavailibilities[] = $unavailibility;
            $unavailibility->setRoom($this);
        }

        return $this;
    }

    public function removeUnavailibility(Unavailibility $unavailibility): self
    {
        if ($this->unavailibilities->contains($unavailibility)) {
            $this->unavailibilities->removeElement($unavailibility);
            // set the owning side to null (unless already changed)
            if ($unavailibility->getRoom() === $this) {
                $unavailibility->setRoom(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setRoom($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getRoom() === $this) {
                $comment->setRoom(null);
            }
        }

        return $this;
    }

    public function getPaste(): ?Paste
    {
        return $this->paste;
    }

    public function setPaste(?Paste $paste): self
    {
        $this->paste = $paste;

        return $this;
    }
}
