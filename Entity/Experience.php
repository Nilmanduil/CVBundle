<?php

namespace Nilmanduil\CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="Nilmanduil\CVBundle\Repository\ExperienceRepository")
 */
class Experience
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
     * @ORM\Column(name="date_end", type="datetime", nullable=true)
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="contract_type", type="string", length=255)
     */
    private $contractType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=255, nullable=true)
     */
    private $details;
    
    /**
     * @ORM\ManyToMany(targetEntity="Nilmanduil\CVBundle\Entity\Skill", cascade={"persist"})
     */
    private $skills;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_still_active", type="boolean")
     */
    private $isStillActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_transverse", type="boolean")
     */
    private $isTransverse;


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
     * Set organization
     *
     * @param string $organization
     *
     * @return Experience
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
     * @return Experience
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
     * @return Experience
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
     * Set contractType
     *
     * @param string $contractType
     *
     * @return Experience
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return string
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Experience
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
     * Set details
     *
     * @param string $details
     *
     * @return Experience
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
     * Set isStillActive
     *
     * @param boolean $isStillActive
     *
     * @return Experience
     */
    public function setIsStillActive($isStillActive)
    {
        $this->isStillActive = $isStillActive;

        return $this;
    }

    /**
     * Get isStillActive
     *
     * @return bool
     */
    public function getIsStillActive()
    {
        return $this->isStillActive;
    }

    /**
     * Set isTransverse
     *
     * @param boolean $isTransverse
     *
     * @return Experience
     */
    public function setIsTransverse($isTransverse)
    {
        $this->isTransverse = $isTransverse;

        return $this;
    }

    /**
     * Get isTransverse
     *
     * @return bool
     */
    public function getIsTransverse()
    {
        return $this->isTransverse;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add skill
     *
     * @param \Nilmanduil\CVBundle\Entity\Skill $skill
     *
     * @return Experience
     */
    public function addSkill(\Nilmanduil\CVBundle\Entity\Skill $skill)
    {
        $this->skills[] = $skill;

        return $this;
    }

    /**
     * Remove skill
     *
     * @param \Nilmanduil\CVBundle\Entity\Skill $skill
     */
    public function removeSkill(\Nilmanduil\CVBundle\Entity\Skill $skill)
    {
        $this->skills->removeElement($skill);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSkills()
    {
        return $this->skills;
    }
}
