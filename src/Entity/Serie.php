<?php

namespace App\Entity;

use App\Repository\SerieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=Manga::class, mappedBy="serie")
     */
    private $mangas;

    public function __construct()
    {
        $this->mangas = new ArrayCollection();
    }

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

    /**
     * @return Collection|Manga[]
     */
    public function getMangas(): Collection
    {
        return $this->mangas;
    }

    public function addManga(Manga $manga): self
    {
        if (!$this->mangas->contains($manga)) {
            $this->mangas[] = $manga;
            $manga->setSerie($this);
        }

        return $this;
    }

    public function removeManga(Manga $manga): self
    {
        if ($this->mangas->removeElement($manga)) {
            // set the owning side to null (unless already changed)
            if ($manga->getSerie() === $this) {
                $manga->setSerie(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
    }
}
