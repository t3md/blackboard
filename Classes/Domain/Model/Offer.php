<?php

namespace T3md\Blackboard\Domain\Model;

use DateTime;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;

/**
 * This file is part of the "GG Blackboard" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 Michael Lang
 */

/**
 * Offer
 */
class Offer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = null;

    /**
     * author
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $author = null;
    
    /**
     * authoruid
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $authoruid = null;
    
    
    /**
     * tel
     *
     * @var string
     */
    protected $tel= null;
    
    /**
     * email
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $email = null;

    /**
     * description
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = null;

    /**
     * kind
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $kind = null;

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * file
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $file = null;

    /**
     * @var DateTime
     */
    protected $endtime;
    
    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param string $author
     * @return void
     */
    public function setAuthor(string $author)
    {
        $this->author = $author;
    }
    
    /**
     * Returns the authoruid
     *
     * @return int
     */
    public function getAuthoruid()
    {
        return $this->authoruid;
    }
    
    /**
     * Sets the authoruid
     *
     * @param int $authoruid
     * @return void
     */
    public function setAuthoruid(int $authoruid)
    {
        $this->authoruid = $authoruid;
    }
    
    /**
     * Sets the telefonnumber
     *
     * @param string $tel
     * @return void
     */
    public function setTel(string $tel)
    {
        $this->author = $tel;
    }
    
    /**
     * Returns the telefonnumber
     *
     *  @return string
     */
    public function getTel()
    {
        return $this->tel;
    }
        
    /**
     * Returns the email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the kind
     *
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets the kind
     *
     * @param int $kind
     * @return void
     */
    public function setKind(int $kind = null)
    {
        $this->kind = $kind;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image 
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the file
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets the file
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $file 
     * @return void
     */
    public function setFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $file)
    {
        $this->file = $file;
    } 
    
    /**
     * Get endtime date
     *
     * @return null|DateTime
     */
    public function getEndtime(): ?DateTime
    {
        return $this->endtime;
    }

    /**
     * Set endtime date
     *
     * @param DateTime $endtime endtime date
     *
     * @return void
     */
    public function setEndtime($endtime): void
    {
        $this->endtime = $endtime;
    }

    
}
