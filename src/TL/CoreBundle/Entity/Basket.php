<?php

namespace TL\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Basket
 *
 * @ORM\Table(name="tl_basket")
 * @ORM\Entity(repositoryClass="TL\CoreBundle\Repository\BasketRepository")
 */
class Basket
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="day", type="datetime")
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_payed", type="boolean")
     */
    private $isPayed;

    /**
     * @var int
     *
     * @ORM\Column(name="total_price", type="integer")
     */
    private $totalPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_ticket", type="integer")
     */
    private $nbrTicket;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tickets = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set day
     *
     * @param \DateTime $day
     *
     * @return Basket
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return \DateTime
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Basket
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Basket
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isPayed
     *
     * @param boolean $isPayed
     *
     * @return Basket
     */
    public function setIsPayed($isPayed)
    {
        $this->isPayed = $isPayed;

        return $this;
    }

    /**
     * Get isPayed
     *
     * @return bool
     */
    public function getIsPayed()
    {
        return $this->isPayed;
    }

    /**
     * Set totalPrice
     *
     * @param integer $totalPrice
     *
     * @return Basket
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return int
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set nbrTicket
     *
     * @param integer $nbrTicket
     *
     * @return Basket
     */
    public function setNbrTicket($nbrTicket)
    {
        $this->nbrTicket = $nbrTicket;

        return $this;
    }

    /**
     * Get nbrTicket
     *
     * @return int
     */
    public function getNbrTicket()
    {
        return $this->nbrTicket;
    }

    /**
     * Add ticket
     *
     * @param \TL\CoreBundle\Entity\Ticket $ticket
     *
     * @return Basket
     */
    public function addTicket(\TL\CoreBundle\Entity\Ticket $ticket)
    {
        $this->tickets[] = $ticket;
        $ticket->setBasket($this);

        return $this;
    }

    /**
     * Remove ticket
     *
     * @param \TL\CoreBundle\Entity\Ticket $ticket
     */
    public function removeTicket(\TL\CoreBundle\Entity\Ticket $ticket)
    {
        $this->tickets->removeElement($ticket);
    }

    /**
     * Get tickets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTickets()
    {
        return $this->tickets;
    }
}
