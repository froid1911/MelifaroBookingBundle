<?php

namespace Melifaro\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 * @codeCoverageIgnore
 * @ORM\MappedSuperclass
 */
abstract class Booking
{
    protected $id;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    protected $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    protected $end;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="storno", type="datetime", nullable=true)
     */
    protected $storno;

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
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set start
     *
     * @param  \DateTime $start
     * @return Booking
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set end
     *
     * @param  \DateTime $end
     * @return Booking
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStorno()
    {
        return $this->storno;
    }

    /**
     * @param \DateTime $storno
     */
    public function setStorno($storno)
    {
        $this->storno = $storno;
    }



    abstract public function getItem();

    abstract public function setItem($item);
}
