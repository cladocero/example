<?php

namespace App\Entity;

use App\Repository\AnimalDiseaseStatsRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: AnimalDiseaseStatsRepository::class)]
class AnimalDiseaseStats
{
    #[ORM\Id]
    #[ORM\Column(name: "animal_type", length: 255)]
    private ?string $animalType = null;

    #[ORM\Id]
    #[ORM\Column(name: "eye_discharge")]
    private ?bool $eyeDischarge = null;

    #[ORM\OneToMany(targetEntity: AnimalDisease::class, mappedBy: 'stats')]
    private Collection $animalDiseases;

    public function __construct()
    {
        $this->animalDiseases = new ArrayCollection();
    }

    #[ORM\Column]
    private ?int $animalCount = null;

    #[ORM\Column]
    private ?float $medianAge = null;

    #[ORM\Column]
    private ?int $medianWeight = null;

    #[ORM\Column]
    private ?float $medianHeartRate = null;

    public function getAnimalType(): ?string
    {
        return $this->animalType;
    }

    public function setAnimalType(string $animalType): static
    {
        $this->animalType = $animalType;

        return $this;
    }

    public function isEyeDischarge(): ?bool
    {
        return $this->eyeDischarge;
    }

    public function setEyeDischarge(bool $eyeDischarge): static
    {
        $this->eyeDischarge = $eyeDischarge;

        return $this;
    }

    public function getAnimalCount(): ?int
    {
        return $this->animalCount;
    }

    public function setAnimalCount(int $animalCount): static
    {
        $this->animalCount = $animalCount;

        return $this;
    }

    public function getMedianAge(): ?float
    {
        return $this->medianAge;
    }

    public function setMedianAge(float $medianAge): static
    {
        $this->medianAge = $medianAge;

        return $this;
    }

    public function getMedianWeight(): ?int
    {
        return $this->medianWeight;
    }

    public function setMedianWeight(int $medianWeight): static
    {
        $this->medianWeight = $medianWeight;

        return $this;
    }

    public function getMedianHeartRate(): ?float
    {
        return $this->medianHeartRate;
    }

    public function setMedianHeartRate(float $medianHeartRate): static
    {
        $this->medianHeartRate = $medianHeartRate;

        return $this;
    }
}
