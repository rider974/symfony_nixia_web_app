<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 75)]
    private ?string $surname_client = null;

    #[ORM\Column(length: 75)]
    private ?string $firstname_client = null;

    #[ORM\Column(length: 100)]
    private ?string $email_client = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $mobile_phone = null;

    #[ORM\Column(length: 14, nullable: true)]
    private ?string $home_phone = null;

    #[ORM\Column(length: 5)]
    private ?string $street_number = null;

    #[ORM\Column(length: 100)]
    private ?string $street_name = null;

    #[ORM\Column(length: 100)]
    private ?string $city = null;

    #[ORM\Column(length: 7)]
    private ?string $zipt_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address_complement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurnameClient(): ?string
    {
        return $this->surname_client;
    }

    public function setSurnameClient(string $surname_client): self
    {
        $this->surname_client = $surname_client;

        return $this;
    }

    public function getFirstnameClient(): ?string
    {
        return $this->firstname_client;
    }

    public function setFirstnameClient(string $firstname_client): self
    {
        $this->firstname_client = $firstname_client;

        return $this;
    }

    public function getEmailClient(): ?string
    {
        return $this->email_client;
    }

    public function setEmailClient(string $email_client): self
    {
        $this->email_client = $email_client;

        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobile_phone;
    }

    public function setMobilePhone(?string $mobile_phone): self
    {
        $this->mobile_phone = $mobile_phone;

        return $this;
    }

    public function getHomePhone(): ?string
    {
        return $this->home_phone;
    }

    public function setHomePhone(?string $home_phone): self
    {
        $this->home_phone = $home_phone;

        return $this;
    }

    public function getStreetNumber(): ?string
    {
        return $this->street_number;
    }

    public function setStreetNumber(string $street_number): self
    {
        $this->street_number = $street_number;

        return $this;
    }

    public function getStreetName(): ?string
    {
        return $this->street_name;
    }

    public function setStreetName(string $street_name): self
    {
        $this->street_name = $street_name;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZiptCode(): ?string
    {
        return $this->zipt_code;
    }

    public function setZiptCode(string $zipt_code): self
    {
        $this->zipt_code = $zipt_code;

        return $this;
    }

    public function getAddressComplement(): ?string
    {
        return $this->address_complement;
    }

    public function setAddressComplement(?string $address_complement): self
    {
        $this->address_complement = $address_complement;

        return $this;
    }
}
