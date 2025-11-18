<?php

namespace App\Entity;

use App\Repository\AnimalDiseaseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalDiseaseRepository::class)]
class AnimalDisease
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $animalType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $breed = null;

    #[ORM\Column(nullable: true)]
    private ?int $age = null;

    #[ORM\Column(length: 255)]
    private ?string $gender = null;

    #[ORM\Column]
    private ?float $weight = null;

    #[ORM\Column(length: 255)]
    private ?string $symptom1 = null;

    #[ORM\Column(length: 255)]
    private ?string $symptom2 = null;

    #[ORM\Column(length: 255)]
    private ?string $symptom3 = null;

    #[ORM\Column(length: 255)]
    private ?string $symptom4 = null;

    #[ORM\Column(length: 255)]
    private ?string $duration = null;

    #[ORM\Column(length: 255)]
    private ?string $appetiteLoss = null;

    #[ORM\Column(length: 255)]
    private ?string $vomiting = null;

    #[ORM\Column(length: 255)]
    private ?string $diarrhea = null;

    #[ORM\Column(length: 255)]
    private ?string $coughing = null;

    #[ORM\Column(length: 255)]
    private ?string $laboredBreathing = null;

    #[ORM\Column(length: 255)]
    private ?string $lameness = null;

    #[ORM\Column(length: 255)]
    private ?string $skinLesions = null;

    #[ORM\Column(length: 255)]
    private ?string $nasalDischarge = null;

    #[ORM\Column(length: 255)]
    private ?string $eyeDischarge = null;

    #[ORM\Column(length: 255)]
    private ?string $bodyTemperature = null;

    #[ORM\Column]
    private ?int $heartRate = null;

    #[ORM\Column(length: 255)]
    private ?string $disease = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnimalType(): ?string
    {
        return $this->animalType;
    }

    public function setAnimalType(string $animalType): static
    {
        $this->animalType = $animalType;

        return $this;
    }

    public function getBreed(): ?string
    {
        return $this->breed;
    }

    public function setBreed(?string $breed): static
    {
        $this->breed = $breed;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    public function getSymptom1(): ?string
    {
        return $this->symptom1;
    }

    public function setSymptom1(string $symptom1): static
    {
        $this->symptom1 = $symptom1;

        return $this;
    }

    public function getSymptom2(): ?string
    {
        return $this->symptom2;
    }

    public function setSymptom2(string $symptom2): static
    {
        $this->symptom2 = $symptom2;

        return $this;
    }

    public function getSymptom3(): ?string
    {
        return $this->symptom3;
    }

    public function setSymptom3(string $symptom3): static
    {
        $this->symptom3 = $symptom3;

        return $this;
    }

    public function getSymptom4(): ?string
    {
        return $this->symptom4;
    }

    public function setSymptom4(string $symptom4): static
    {
        $this->symptom4 = $symptom4;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getAppetiteLoss(): ?string
    {
        return $this->appetiteLoss;
    }

    public function setAppetiteLoss(string $appetiteLoss): static
    {
        $this->appetiteLoss = $appetiteLoss;

        return $this;
    }

    public function getVomiting(): ?string
    {
        return $this->vomiting;
    }

    public function setVomiting(string $vomiting): static
    {
        $this->vomiting = $vomiting;

        return $this;
    }

    public function getDiarrhea(): ?string
    {
        return $this->diarrhea;
    }

    public function setDiarrhea(string $diarrhea): static
    {
        $this->diarrhea = $diarrhea;

        return $this;
    }

    public function getCoughing(): ?string
    {
        return $this->coughing;
    }

    public function setCoughing(string $coughing): static
    {
        $this->coughing = $coughing;

        return $this;
    }

    public function getLaboredBreathing(): ?string
    {
        return $this->laboredBreathing;
    }

    public function setLaboredBreathing(string $laboredBreathing): static
    {
        $this->laboredBreathing = $laboredBreathing;

        return $this;
    }

    public function getLameness(): ?string
    {
        return $this->lameness;
    }

    public function setLameness(string $lameness): static
    {
        $this->lameness = $lameness;

        return $this;
    }

    public function getSkinLesions(): ?string
    {
        return $this->skinLesions;
    }

    public function setSkinLesions(string $skinLesions): static
    {
        $this->skinLesions = $skinLesions;

        return $this;
    }

    public function getNasalDischarge(): ?string
    {
        return $this->nasalDischarge;
    }

    public function setNasalDischarge(string $nasalDischarge): static
    {
        $this->nasalDischarge = $nasalDischarge;

        return $this;
    }

    public function getEyeDischarge(): ?string
    {
        return $this->eyeDischarge;
    }

    public function setEyeDischarge(string $eyeDischarge): static
    {
        $this->eyeDischarge = $eyeDischarge;

        return $this;
    }

    public function getBodyTemperature(): ?string
    {
        return $this->bodyTemperature;
    }

    public function setBodyTemperature(string $bodyTemperature): static
    {
        $this->bodyTemperature = $bodyTemperature;

        return $this;
    }

    public function getHeartRate(): ?int
    {
        return $this->heartRate;
    }

    public function setHeartRate(int $heartRate): static
    {
        $this->heartRate = $heartRate;

        return $this;
    }

    public function getDisease(): ?string
    {
        return $this->disease;
    }

    public function setDisease(string $disease): static
    {
        $this->disease = $disease;

        return $this;
    }
}
