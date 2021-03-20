<?php

namespace App\Entity;

use App\Repository\ScenaristeRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Personne;

/**
 * @ORM\Entity(repositoryClass=ScenaristeRepository::class)
 */
class Scenariste
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
}
