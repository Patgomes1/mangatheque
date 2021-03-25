<?php

namespace App\Entity;

use App\Repository\SerieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SerieRepository::class)
 */
class Serie
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

    /**
     * @ORM\Column(type="boolean")
     */
    private $etat;

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

    public function getEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    /*public function __toString()
    {
        return $this-> nom;
    }*/
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Editeur", mappedBy="serie")
     */

    private $editeurs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Scenariste", mappedBy="serie")
     */

    private $scenariste;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="series")
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity=Personne::class, inversedBy="series")
     */
    private $personne;

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(?Personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }

    /*public function __toString()
    {
        return $this->etat;
    }*/
}
