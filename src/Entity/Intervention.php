<?php

namespace App\Entity;

use App\Repository\InterventionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InterventionRepository::class)]
class Intervention
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $title_intervention = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description_intervention = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_time_intervention = null;

    #[ORM\Column]
    private ?int $time_min_intervention = null;

    #[ORM\Column(length: 250, nullable: true)]
    private ?string $signature = null;

    #[ORM\Column]
    private ?int $id_employee_intervention = null;

    #[ORM\Column]
    private ?int $id_client_intervention = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleIntervention(): ?string
    {
        return $this->title_intervention;
    }

    public function setTitleIntervention(string $title_intervention): self
    {
        $this->title_intervention = $title_intervention;

        return $this;
    }

    public function getDescriptionIntervention(): ?string
    {
        return $this->description_intervention;
    }

    public function setDescriptionIntervention(?string $description_intervention): self
    {
        $this->description_intervention = $description_intervention;

        return $this;
    }

    public function getDateTimeIntervention(): ?\DateTimeInterface
    {
        return $this->date_time_intervention;
    }

    public function setDateTimeIntervention(\DateTimeInterface $date_time_intervention): self
    {
        $this->date_time_intervention = $date_time_intervention;

        return $this;
    }

    public function getTimeMinIntervention(): ?int
    {
        return $this->time_min_intervention;
    }

    public function setTimeMinIntervention(int $time_min_intervention): self
    {
        $this->time_min_intervention = $time_min_intervention;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getIdEmployeeIntervention(): ?int
    {
        return $this->id_employee_intervention;
    }

    public function setIdEmployeeIntervention(int $id_employee_intervention): self
    {
        $this->id_employee_intervention = $id_employee_intervention;

        return $this;
    }

    public function getIdClientIntervention(): ?int
    {
        return $this->id_client_intervention;
    }

    public function setIdClientIntervention(int $id_client_intervention): self
    {
        $this->id_client_intervention = $id_client_intervention;

        return $this;
    }
}
