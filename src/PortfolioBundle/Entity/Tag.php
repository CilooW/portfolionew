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
}

