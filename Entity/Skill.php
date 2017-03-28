<?php

namespace Nilmanduil\CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill")
 * @ORM\Entity(repositoryClass="Nilmanduil\CVBundle\Repository\SkillRepository")
 */
class Skill
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
     * @var SkillCategory
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\CVBundle\Entity\SkillCategory")
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
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=255, nullable=true)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="certifications", type="string", length=255, nullable=true)
     */
    private $certifications;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_language", type="boolean")
     */
    private $isLanguage;


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
     * @return Skill
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
     * Set level
     *
     * @param integer $level
     *
     * @return Skill
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Skill
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
     * Set certifications
     *
     * @param string $certifications
     *
     * @return Skill
     */
    public function setCertifications($certifications)
    {
        $this->certifications = $certifications;

        return $this;
    }

    /**
     * Get certifications
     *
     * @return string
     */
    public function getCertifications()
    {
        return $this->certifications;
    }

    /**
     * Set isLanguage
     *
     * @param boolean $isLanguage
     *
     * @return Skill
     */
    public function setIsLanguage($isLanguage)
    {
        $this->isLanguage = $isLanguage;

        return $this;
    }

    /**
     * Get isLanguage
     *
     * @return bool
     */
    public function getIsLanguage()
    {
        return $this->isLanguage;
    }

    /**
     * Set category
     *
     * @param \Nilmanduil\CVBundle\Entity\SkillCategory $category
     *
     * @return Skill
     */
    public function setCategory(\Nilmanduil\CVBundle\Entity\SkillCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Nilmanduil\CVBundle\Entity\SkillCategory
     */
    public function getCategory()
    {
        return $this->category;
    }
}
