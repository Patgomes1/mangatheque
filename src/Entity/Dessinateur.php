<?php

namespace App\Entity;

use App\Repository\DessinateurRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Personne;

/**
 * @ORM\Entity(repositoryClass=DessinateurRepository::class)
 */
class Dessinateur
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Personne", inversedBy="Dessinateurs")
     */

    private $personne;
}
