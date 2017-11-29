<?php

namespace FormArmorBundle\Entity;

/**
 * Annonce
 */
class Annonce
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $intitule;

    /**
     * @var string
     */
    private $details;

    /**
     * @var \DateTime
     */
    private $dateAffichage;

    /**
     * @var \DateTime
     */
    private $dateDesaffichage;


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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Annonce
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Annonce
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set dateAffichage
     *
     * @param \DateTime $dateAffichage
     *
     * @return Annonce
     */
    public function setDateAffichage($dateAffichage)
    {
        $this->dateAffichage = $dateAffichage;

        return $this;
    }

    /**
     * Get dateAffichage
     *
     * @return \DateTime
     */
    public function getDateAffichage()
    {
        return $this->dateAffichage;
    }

    /**
     * Set dateDesaffichage
     *
     * @param \DateTime $dateDesaffichage
     *
     * @return Annonce
     */
    public function setDateDesaffichage($dateDesaffichage)
    {
        $this->dateDesaffichage = $dateDesaffichage;

        return $this;
    }

    /**
     * Get dateDesaffichage
     *
     * @return \DateTime
     */
    public function getDateDesaffichage()
    {
        return $this->dateDesaffichage;
    }
}

