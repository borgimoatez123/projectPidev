<?php

declare(strict_types=1);

namespace App\Entity\gestion_de_depence;

use App\Repository\gestion_de_depence\StatistiquesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatistiquesRepository::class)]
class Statistiques
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_statistique = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column(length: 255)]
    private ?string $hotel_name = null;

    #[ORM\Column(length: 255)]
    private ?string $transport_type = null;

    #[ORM\Column]
    private ?bool $sponsoring = null;

    #[ORM\Column(type: "decimal", precision: 10, scale: 2)]
    private ?float $priceTotal = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    public function getIdStatistique(): ?int
    {
        return $this->id_statistique;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): self
    {
        $this->id_user = $id_user;
        return $this;
    }

    public function getHotelName(): ?string
    {
        return $this->hotel_name;
    }

    public function setHotelName(string $hotel_name): self
    {
        $this->hotel_name = $hotel_name;
        return $this;
    }

    public function getTransportType(): ?string
    {
        return $this->transport_type;
    }

    public function setTransportType(string $transport_type): self
    {
        $this->transport_type = $transport_type;
        return $this;
    }

    public function isSponsoring(): ?bool
    {
        return $this->sponsoring;
    }

    public function setSponsoring(bool $sponsoring): self
    {
        $this->sponsoring = $sponsoring;
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
}