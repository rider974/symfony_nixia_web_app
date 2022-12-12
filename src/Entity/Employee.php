<?php

namespace App\Entity;


use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $surname_employee = null;

    #[ORM\Column(length: 100)]
    private ?string $firstname_employee = null;

    #[ORM\Column(length: 4)]
    private ?string $pin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurnameEmployee(): ?string
    {
        return $this->surname_employee;
    }

    public function setSurnameEmployee(string $surname_employee): self
    {
        $this->surname_employee = $surname_employee;

        return $this;
    }

    public function getFirstnameEmployee(): ?string
    {
        return $this->firstname_employee;
    }

    public function setFirstnameEmployee(string $firstname_employee): self
    {
        $this->firstname_employee = $firstname_employee;

        return $this;
    }

    public function getPin(): ?string
    {
        return $this->pin;
    }

    public function setPin(string $pin): self
    {
        $this->pin = $pin;

        return $this;
    }
}
