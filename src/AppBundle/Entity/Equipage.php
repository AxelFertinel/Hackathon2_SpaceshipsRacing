<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipage
 *
 * @ORM\Table(name="equipage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EquipageRepository")
 */
class Equipage
{
    public function __toString()
    {
        return $this->id;
    }

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Equipe", inversedBy="membre"))
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_equipe;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Equipage
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Equipage
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set idEquipe
     *
     * @param \AppBundle\Entity\Equipe $idEquipe
     *
     * @return Equipage
     */
    public function setIdEquipe(\AppBundle\Entity\Equipe $idEquipe)
    {
        $this->id_equipe = $idEquipe;

        return $this;
    }

    /**
     * Get idEquipe
     *
     * @return \AppBundle\Entity\Equipe
     */
    public function getIdEquipe()
    {
        return $this->id_equipe;
    }
}
