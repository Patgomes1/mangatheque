<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 */
class Personne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $prenom;

    /**
     * @ORM\Column(type="boolean")
     */
    private $scenariste;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dessinateur;

    /**
     * @ORM\OneToMany(targetEntity=Serie::class, mappedBy="personne")
     */
    private $series;

    public function __construct()
    {
        $this->series = new ArrayCollection();
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getScenariste(): ?bool
    {
        return $this->scenariste;
    }

    public function setScenariste(bool $scenariste): self
    {
        $this->scenariste = $scenariste;

        return $this;
    }

    public function getDessinateur(): ?bool
    {
        return $this->dessinateur;
    }

    public function setDessinateur(bool $dessinateur): self
    {
        $this->dessinateur = $dessinateur;

        return $this;
    }

    /**
     * @return Collection|Serie[]
     */
    public function getSeries(): Collection
    {
        return $this->series;
    }

    public function addSeries(Serie $series): self
    {
        if (!$this->series->contains($series)) {
            $this->series[] = $series;
            $series->setPersonne($this);
        }

        return $this;
    }

    public function removeSeries(Serie $series): self
    {
        if ($this->series->removeElement($series)) {
            // set the owning side to null (unless already changed)
            if ($series->getPersonne() === $this) {
                $series->setPersonne(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->prenom.' '.$this->nom;
    }
}
