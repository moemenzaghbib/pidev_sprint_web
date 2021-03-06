<?php

namespace App\Entity;

use App\Entity\Service;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Equipe
 *
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_equipe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipe;

    /**
     * @Assert\NotBlank(message=" Numero equipe doit etre non vide")
     *
     * @ORM\Column(name="num_equipe", type="integer", nullable=false)
     */
    private $numEquipe;

    /**
     * @Assert\NotBlank(message=" nombre employee doit etre non vide")
     *
     * @ORM\Column(name="nbre_emp", type="integer", nullable=false)
     */
    private $nbreEmp = '0';

    /**
     * @ORM\ManyToOne(targetEntity=Service::class, inversedBy="equipes")
     */
    private $service;



    /**
     * @return int
     */
    public function getIdEquipe(): ?int
    {
        return $this->idEquipe;
    }

    /**
     * @param int $idEquipe
     */
    public function setIdEquipe(int $idEquipe): void
    {
        $this->idEquipe = $idEquipe;
    }

    /**
     * @return int
     */
    public function getNumEquipe(): ?int
    {
        return $this->numEquipe;
    }

    /**
     * @param int $numEquipe
     */
    public function setNumEquipe(int $numEquipe): void
    {
        $this->numEquipe = $numEquipe;
    }

    /**
     * @return int
     */
    public function getNbreEmp()
    {
        return $this->nbreEmp;
    }

    /**
     * @param int $nbreEmp
     */
    public function setNbreEmp($nbreEmp): void
    {
        $this->nbreEmp = $nbreEmp;
    }





    public function __toString()
    {
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }
}
