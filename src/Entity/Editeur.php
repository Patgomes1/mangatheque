<?php

namespace App\Entity;

use App\Repository\EditeurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EditeurRepository::class)
 */
class Editeur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nom;

    public function getId(): ?int
    {
        return $this->id;
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
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Serie", inversedBy="Editeurs")
     */

    private $serie;

    /**
     * @ORM\OneToMany(targetEntity=Serie::class, mappedBy="editeur")
     */
    private $series;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageEditeur;

    public function __construct()
    {
        $this->series = new ArrayCollection();
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
            $series->setEditeur($this);
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nom;
    }

    public function removeSeries(Serie $series): self
    {
        if ($this->series->removeElement($series)) {
            // set the owning side to null (unless already changed)
            if ($series->getEditeur() === $this) {
                $series->setEditeur(null);
            }
        }

        return $this;
    }

    public function getImageEditeur(): ?string
    {
        return $this->imageEditeur;
    }

    public function setImageEditeur(?string $imageEditeur): self
    {
        $this->imageEditeur = $imageEditeur;

        return $this;
    }
}
