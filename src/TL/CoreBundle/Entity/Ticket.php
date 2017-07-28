<?php

namespace TL\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="tl_ticket")
 * @ORM\Entity(repositoryClass="TL\CoreBundle\Repository\TicketRepository")
 */
class Ticket
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="datetime")
     */
    private $birthday;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_reduced", type="boolean")
     */
    private $isReduced;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_whole_day", type="boolean")
     */
    private $isWholeDay;

    /**
     * @ORM\ManyToOne(targetEntity="TL\CoreBundle\Entity\Basket")
     * @ORM\JoinColumn(nullable=false)
     */
    private $basket;


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
     * Set name
     *
     * @param string $name
     *
     * @return Ticket
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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Ticket
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set bithday
     *
     * @param \DateTime $bithday
     *
     * @return Ticket
     */
    public function setBithday($bithday)
    {
        $this->bithday = $bithday;

        return $this;
    }

    /**
     * Get bithday
     *
     * @return \DateTime
     */
    public function getBithday()
    {
        return $this->bithday;
    }

    /**
     * Set isReduced
     *
     * @param boolean $isReduced
     *
     * @return Ticket
     */
    public function setIsReduced($isReduced)
    {
        $this->isReduced = $isReduced;

        return $this;
    }

    /**
     * Get isReduced
     *
     * @return bool
     */
    public function getIsReduced()
    {
        return $this->isReduced;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Ticket
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set isWholeDay
     *
     * @param boolean $isWholeDay
     *
     * @return Ticket
     */
    public function setIsWholeDay($isWholeDay)
    {
        $this->isWholeDay = $isWholeDay;

        return $this;
    }

    /**
     * Get isWholeDay
     *
     * @return bool
     */
    public function getIsWholeDay()
    {
        return $this->isWholeDay;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return Ticket
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set basket
     *
     * @param \TL\CoreBundle\Entity\Basket $basket
     *
     * @return Ticket
     */
    public function setBasket(\TL\CoreBundle\Entity\Basket $basket)
    {
        $this->basket = $basket;

        return $this;
    }

    /**
     * Get basket
     *
     * @return \TL\CoreBundle\Entity\Basket
     */
    public function getBasket()
    {
        return $this->basket;
    }
}
