<?php

namespace CarteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notation
 */
class Notation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $rating;

    /**
     * @var string
     */
    private $comment;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return Notation
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Notation
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * @var \CarteBundle\Entity\Circuit
     */
    private $circuit;

    /**
     * @var \CarteBundle\Entity\Location
     */
    private $location;


    /**
     * Set circuit
     *
     * @param \CarteBundle\Entity\Circuit $circuit
     * @return Notation
     */
    public function setCircuit(\CarteBundle\Entity\Circuit $circuit = null)
    {
        $this->circuit = $circuit;

        return $this;
    }

    /**
     * Get circuit
     *
     * @return \CarteBundle\Entity\Circuit 
     */
    public function getCircuit()
    {
        return $this->circuit;
    }

    /**
     * Set location
     *
     * @param \CarteBundle\Entity\Location $location
     * @return Notation
     */
    public function setLocation(\CarteBundle\Entity\Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \CarteBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }
}