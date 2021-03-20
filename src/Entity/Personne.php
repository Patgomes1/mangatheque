<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
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
     * @ORM\OneToMany(targetEntity="App\Entity\Dessinateur", mappedBy="categorie")
     */

    private $dessinateur;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Editeur", mappedBy="categorie")
     */

    private $dessinateurs;
}
