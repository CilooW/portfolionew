<?php

namespace PortfolioBundle\Entity;

/**
 * Citation
 */
class Citation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $auteur;

    /**
     * @var string
     */
    private $extrait;


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
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Citation
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set extrait
     *
     * @param string $extrait
     *
     * @return Citation
     */
    public function setExtrait($extrait)
    {
        $this->extrait = $extrait;

        return $this;
    }

    /**
     * Get extrait
     *
     * @return string
     */
    public function getExtrait()
    {
        return $this->extrait;
    }
}
