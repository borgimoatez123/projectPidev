<?php

namespace App\Entity\gestion_de_depence;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'transaction')]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_transaction', type: 'integer')]
    private $idTransaction;

    #[ORM\Column(name: 'id_user', type: 'integer')]
    private $idUser;

    #[ORM\Column(name: 'id_event', type: 'integer')]
    private $idEvent;

    #[ORM\Column(name: 'id_booking', type: 'integer')]
    private $idBooking;

    #[ORM\Column(name: 'price_total', type: 'decimal', precision: 10, scale: 2)]
    private $priceTotal;

    #[ORM\Column(name: 'status', type: 'string', length: 20)]
    private $status;

    #[ORM\Column(name: 'date_transaction', type: 'datetime')]
    private $dateTransaction;

    // Add getters and setters for all properties
    public function getIdTransaction(): ?int
    {
        return $this->idTransaction;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;
        return $this;
    }

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function setIdEvent(int $idEvent): self
    {
        $this->idEvent = $idEvent;
        return $this;
    }

    public function getIdBooking(): ?int
    {
        return $this->idBooking;
    }

    public function setIdBooking(int $idBooking): self
    {
        $this->idBooking = $idBooking;
        return $this;
    }

    public function getPriceTotal(): ?float
    {
        return $this->priceTotal;
    }

    public function setPriceTotal(float $priceTotal): self
    {
        $this->priceTotal = $priceTotal;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getDateTransaction(): ?\DateTimeInterface
    {
        return $this->dateTransaction;
    }

    public function setDateTransaction(\DateTimeInterface $dateTransaction): self
    {
        $this->dateTransaction = $dateTransaction;
        return $this;
    }
}