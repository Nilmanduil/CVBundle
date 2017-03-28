<?php

namespace Nilmanduil\CVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resume
 *
 * @ORM\Table(name="resume")
 * @ORM\Entity(repositoryClass="Nilmanduil\CVBundle\Repository\ResumeRepository")
 */
class Resume
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
     * @var Candidate
     * 
     * @ORM\ManyToOne(targetEntity="Nilmanduil\CVBundle\Entity\Candidate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $candidate;
    
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255, nullable=true)
     */
    private $subtitle;

    /**
     * @ORM\ManyToMany(targetEntity="Nilmanduil\CVBundle\Entity\Skill", cascade={"persist"})
     */
    private $skills;
    
    /**
     * @ORM\ManyToMany(targetEntity="Nilmanduil\CVBundle\Entity\Experience", cascade={"persist"})
     */
    private $experiences;
    
    /**
     * @ORM\ManyToMany(targetEntity="Nilmanduil\CVBundle\Entity\Degree", cascade={"persist"})
     */
    private $degrees;
    
    /**
     * @ORM\ManyToMany(targetEntity="Nilmanduil\CVBundle\Entity\Hobby", cascade={"persist"})
     */
    private $hobbies;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="options", type="object", nullable=true)
     */
    private $options;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetimetz")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetimetz")
     */
    private $dateUpd;


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
     * Set title
     *
     * @param string $title
     *
     * @return Resume
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     *
     * @return Resume
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set options
     *
     * @param \stdClass $options
     *
     * @return Resume
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return \stdClass
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Resume
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return Resume
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
        $this->experiences = new \Doctrine\Common\Collections\ArrayCollection();
        $this->degrees = new \Doctrine\Common\Collections\ArrayCollection();
        $this->hobbies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set candidate
     *
     * @param \Nilmanduil\CVBundle\Entity\Candidate $candidate
     *
     * @return Resume
     */
    public function setCandidate(\Nilmanduil\CVBundle\Entity\Candidate $candidate)
    {
        $this->candidate = $candidate;

        return $this;
    }

    /**
     * Get candidate
     *
     * @return \Nilmanduil\CVBundle\Entity\Candidate
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * Add skill
     *
     * @param \Nilmanduil\CVBundle\Entity\Skill $skill
     *
     * @return Resume
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

    /**
     * Add experience
     *
     * @param \Nilmanduil\CVBundle\Entity\Experience $experience
     *
     * @return Resume
     */
    public function addExperience(\Nilmanduil\CVBundle\Entity\Experience $experience)
    {
        $this->experiences[] = $experience;

        return $this;
    }

    /**
     * Remove experience
     *
     * @param \Nilmanduil\CVBundle\Entity\Experience $experience
     */
    public function removeExperience(\Nilmanduil\CVBundle\Entity\Experience $experience)
    {
        $this->experiences->removeElement($experience);
    }

    /**
     * Get experiences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Add degree
     *
     * @param \Nilmanduil\CVBundle\Entity\Degree $degree
     *
     * @return Resume
     */
    public function addDegree(\Nilmanduil\CVBundle\Entity\Degree $degree)
    {
        $this->degrees[] = $degree;

        return $this;
    }

    /**
     * Remove degree
     *
     * @param \Nilmanduil\CVBundle\Entity\Degree $degree
     */
    public function removeDegree(\Nilmanduil\CVBundle\Entity\Degree $degree)
    {
        $this->degrees->removeElement($degree);
    }

    /**
     * Get degrees
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDegrees()
    {
        return $this->degrees;
    }

    /**
     * Add hobby
     *
     * @param \Nilmanduil\CVBundle\Entity\Hobby $hobby
     *
     * @return Resume
     */
    public function addHobby(\Nilmanduil\CVBundle\Entity\Hobby $hobby)
    {
        $this->hobbies[] = $hobby;

        return $this;
    }

    /**
     * Remove hobby
     *
     * @param \Nilmanduil\CVBundle\Entity\Hobby $hobby
     */
    public function removeHobby(\Nilmanduil\CVBundle\Entity\Hobby $hobby)
    {
        $this->hobbies->removeElement($hobby);
    }

    /**
     * Get hobbies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }
}
