<?php

namespace Nilmanduil\CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Degree
 *
 * @ORM\Table(name="degree")
 * @ORM\Entity(repositoryClass="Nilmanduil\CVBundle\Repository\DegreeRepository")
 */
class Degree
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
     * @ORM\Column(name="diploma_name", type="string", length=255, nullable=true)
     */
    private $diplomaName;

    /**
     * @var string
     *
     * @ORM\Column(name="organization", type="string", length=255)
     */
    private $organization;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime")
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="datetime")
     */
    private $dateEnd;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_certification", type="boolean")
     */
    private $isCertification;


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
     * @return Degree
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
     * Set diplomaName
     *
     * @param string $diplomaName
     *
     * @return Degree
     */
    public function setDiplomaName($diplomaName)
    {
        $this->diplomaName = $diplomaName;

        return $this;
    }

    /**
     * Get diplomaName
     *
     * @return string
     */
    public function getDiplomaName()
    {
        return $this->diplomaName;
    }

    /**
     * Set organization
     *
     * @param string $organization
     *
     * @return Degree
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return Degree
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return Degree
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set isCertification
     *
     * @param boolean $isCertification
     *
     * @return Degree
     */
    public function setIsCertification($isCertification)
    {
        $this->isCertification = $isCertification;

        return $this;
    }

    /**
     * Get isCertification
     *
     * @return bool
     */
    public function getIsCertification()
    {
        return $this->isCertification;
    }
}

