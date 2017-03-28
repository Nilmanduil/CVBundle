<?php

namespace Nilmanduil\CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hobby
 *
 * @ORM\Table(name="hobby")
 * @ORM\Entity(repositoryClass="Nilmanduil\CVBundle\Repository\HobbyRepository")
 */
class Hobby
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
     * @var HobbyCategory
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\CVBundle\Entity\HobbyCategory")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * @return Hobby
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
     * Set category
     *
     * @param \Nilmanduil\CVBundle\Entity\HobbyCategory $category
     *
     * @return Hobby
     */
    public function setCategory(\Nilmanduil\CVBundle\Entity\HobbyCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Nilmanduil\CVBundle\Entity\HobbyCategory
     */
    public function getCategory()
    {
        return $this->category;
    }
}
