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
    private ?string $breed = null;

    #[ORM\Column]
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
    private ?string $animalType = null;

    #[ORM\Column(length: 255)]
    private ?string $duration = null;

    #[ORM\Column]
    private ?bool $appetiteLoss = null;

    #[ORM\Column]
    private ?bool $vomiting = null;

    #[ORM\Column]
    private ?bool $diarrhea = null;

    #[ORM\Column]
    private ?bool $coughing = null;

    #[ORM\Column]
    private ?bool $laboredBreathing = null;

    #[ORM\Column]
    private ?bool $lameness = null;

    #[ORM\Column]
    private ?bool $skinLesions = null;

    #[ORM\Column]
    private ?bool $nasalDischarge = null;

    #[ORM\Column]
    private ?bool $eyeDischarge = null;

    #[ORM\ManyToOne(targetEntity: AnimalDiseaseStats::class, inversedBy: 'animalDiseases')]
    #[ORM\JoinColumn(name: "animalType", referencedColumnName: "animal_type")]
    #[ORM\JoinColumn(name: "eyeDischarge", referencedColumnName: "eye_discharge")]
    private ?AnimalDiseaseStats $stats;

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

    public function getBreed(): ?string
    {
        return $this->breed;
    }

    public function setBreed(string $breed): static
    {
        $this->breed = $breed;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
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

    public function getAnimalType(): ?string
    {
        return $this->animalType;
    }

    public function setAnimalType(string $animalType): static
    {
        $this->animalType = $animalType;

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

    public function isAppetiteLoss(): ?bool
    {
        return $this->appetiteLoss;
    }

    public function setAppetiteLoss(bool $appetiteLoss): static
    {
        $this->appetiteLoss = $appetiteLoss;

        return $this;
    }

    public function isVomiting(): ?bool
    {
        return $this->vomiting;
    }

    public function setVomiting(bool $vomiting): static
    {
        $this->vomiting = $vomiting;

        return $this;
    }

    public function isDiarrhea(): ?bool
    {
        return $this->diarrhea;
    }

    public function setDiarrhea(bool $diarrhea): static
    {
        $this->diarrhea = $diarrhea;

        return $this;
    }

    public function isCoughing(): ?bool
    {
        return $this->coughing;
    }

    public function setCoughing(bool $coughing): static
    {
        $this->coughing = $coughing;

        return $this;
    }

    public function isLaboredBreathing(): ?bool
    {
        return $this->laboredBreathing;
    }

    public function setLaboredBreathing(bool $laboredBreathing): static
    {
        $this->laboredBreathing = $laboredBreathing;

        return $this;
    }

    public function isLameness(): ?bool
    {
        return $this->lameness;
    }

    public function setLameness(bool $lameness): static
    {
        $this->lameness = $lameness;

        return $this;
    }

    public function isSkinLesions(): ?bool
    {
        return $this->skinLesions;
    }

    public function setSkinLesions(bool $skinLesions): static
    {
        $this->skinLesions = $skinLesions;

        return $this;
    }

    public function isNasalDischarge(): ?bool
    {
        return $this->nasalDischarge;
    }

    public function setNasalDischarge(bool $nasalDischarge): static
    {
        $this->nasalDischarge = $nasalDischarge;

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
