<?php

namespace PortfolioBundle\Entity;

/**
 * Tag
 */
class Tag
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tech;


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
     * Set tech
     *
     * @param string $tech
     *
     * @return Tag
     */
    public function setTech($tech)
    {
        $this->tech = $tech;

        return $this;
    }

    /**
     * Get tech
     *
     * @return string
     */
    public function getTech()
    {
        return $this->tech;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $projets;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add projet
     *
     * @param \PortfolioBundle\Entity\Projet $projet
     *
     * @return Tag
     */
    public function addProjet(\PortfolioBundle\Entity\Projet $projet)
    {
        $this->projets[] = $projet;

        return $this;
    }

    /**
     * Remove projet
     *
     * @param \PortfolioBundle\Entity\Projet $projet
     */
    public function removeProjet(\PortfolioBundle\Entity\Projet $projet)
    {
        $this->projets->removeElement($projet);
    }

    /**
     * Get projets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjets() //retourne TOUS les projet contenant un tag
    {
        return $this->projets;
    }

    public function __toString()
    {
        return  "";
    }
}
