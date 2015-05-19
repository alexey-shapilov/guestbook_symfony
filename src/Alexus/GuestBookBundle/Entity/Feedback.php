<?php

namespace Alexus\GuestBookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="feedback")
 */

class Feedback {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime", name="$create_at")
     *
     * @Assert\DateTime(
     *      message = "feedback.create_at.date_time"
     * )
     */
    protected $createAt;

    /**
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank(
     *      message = "feedback.author.not_blank"
     * )
     */
    protected $author;

    /**
     * @ORM\Column(type="text")
     *
     * @Assert\NotBlank(
     *      message = "feedback.text.not_blank"
     * )
     */
    protected $text;

    /**
     * Get id
     *
     * @return integer
     *
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return Feedback
     */
    public function setCreateAt()
    {
        $this->createAt = new \DateTime();

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime 
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Feedback
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Feedback
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }
}
