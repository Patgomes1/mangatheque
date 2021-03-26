<?php

namespace App\Entity;

use App\Repository\MangaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MangaRepository::class)
 */
class Manga
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPage;

    /**
     * @ORM\Column(type="integer")
     */
    private $numTome;

    /**
     * @ORM\Column(type="float")
     */
    private $prixManga;

    /**
     * @ORM\Column(type="text")
     */
    private $descManga;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="date")
     */
    private $dateParution;

    /**
     * @ORM\ManyToOne(targetEntity=Serie::class, inversedBy="mangas")
     */
    private $serie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbPage(): ?int
    {
        return $this->nbPage;
    }

    public function setNbPage(int $nbPage): self
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    public function getNumTome(): ?int
    {
        return $this->numTome;
    }

    public function setNumTome(int $numTome): self
    {
        $this->numTome = $numTome;

        return $this;
    }

    public function getPrixManga(): ?float
    {
        return $this->prixManga;
    }

    public function setPrixManga(float $prixManga): self
    {
        $this->prixManga = $prixManga;

        return $this;
    }

    public function getDescManga(): ?string
    {
        return $this->descManga;
    }

    public function setDescManga(string $descManga): self
    {
        $this->descManga = $descManga;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDateParution(): ?\DateTimeInterface
    {
        return $this->dateParution;
    }

    public function setDateParution(\DateTimeInterface $dateParution): self
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    public function getSerie(): ?Serie
    {
        return $this->serie;
    }

    public function setSerie(?Serie $serie): self
    {
        $this->serie = $serie;

        return $this;
    }


}
