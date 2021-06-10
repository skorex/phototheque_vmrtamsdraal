<?php
namespace PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model;


/***
 *
 * This file is part of the "Photothèque VMRTAMSBRAAL" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Valentin MOREL <valentin.morel1@etu.u-bordeaux.fr>, DAWIN
 *           Romain TALON <romain.talon@etu.u-bordeaux.fr>, DAWIN
 *           Simon BOTTE <simon.botte@etu.u-bordeaux.fr>, DAWIN
 *           Axel MORICEAU <axel.moriceau@etu.u-bordeaux.fr>, DAWIN
 *           ROMAIN ANGIER <romain.angier@etu.u-bordeaux.fr>, DAWIN
 *           Lauranne APERS <lauranne.apers@etu.u-bordeaux.fr>, DAWIN
 *
 ***/
/**
 * Photo
 */
class Photo extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Title
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Fichier
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $file = null;

    /**
     * Date de prise de vue
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $shootingDate = null;

    /**
     * Auteur
     * 
     * @var string
     */
    protected $author = '';

    /**
     * Lieu
     * 
     * @var string
     */
    protected $place = '';

    /**
     * Sujets
     * 
     * @var string
     */
    protected $models = '';

    /**
     * tag list
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $tags = null;

    /**
     * commentaire list
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $comments = null;

    /**
     * Returns the title
     * 
     * @return string $title
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
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     * 
     * @return string $description
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
    public function setDescription($description)
    {
        $this->description = $description;
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
     * Returns the shootingDate
     * 
     * @return \DateTime $shootingDate
     */
    public function getShootingDate()
    {
        return $this->shootingDate;
    }

    /**
     * Sets the shootingDate
     * 
     * @param \DateTime $shootingDate
     * @return void
     */
    public function setShootingDate(\DateTime $shootingDate)
    {
        $this->shootingDate = $shootingDate;
    }

    /**
     * Returns the author
     * 
     * @return string $author
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
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Returns the place
     * 
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     * 
     * @param string $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * Returns the models
     * 
     * @return string $models
     */
    public function getModels()
    {
        return $this->models;
    }

    /**
     * Sets the models
     * 
     * @param string $models
     * @return void
     */
    public function setModels($models)
    {
        $this->models = $models;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->comments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Tag
     * 
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     * 
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }

    /**
     * Adds a Comment
     * 
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment $comment
     * @return void
     */
    public function addComment(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment $comment)
    {
        $this->comments->attach($comment);
    }

    /**
     * Removes a Comment
     * 
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment $commentToRemove The Comment to be removed
     * @return void
     */
    public function removeComment(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment $commentToRemove)
    {
        $this->comments->detach($commentToRemove);
    }

    /**
     * Returns the comments
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment> $comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets the comments
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment> $comments
     * @return void
     */
    public function setComments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $comments)
    {
        $this->comments = $comments;
    }
}
