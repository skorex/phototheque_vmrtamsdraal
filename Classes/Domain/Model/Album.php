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
 * Albums
 */
class Album extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * description
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = '';

    /**
     * shootingDate
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $shootingDate = null;

    /**
     * thumbmail
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $thumbmail = null;

    /**
     * photo list
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $photos = null;

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
     * Returns the thumbmail
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbmail
     */
    public function getThumbmail()
    {
        return $this->thumbmail;
    }

    /**
     * Sets the thumbmail
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbmail
     * @return void
     */
    public function setThumbmail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbmail)
    {
        $this->thumbmail = $thumbmail;
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
        $this->photos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Photo
     * 
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo $photo
     * @return void
     */
    public function addPhoto(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo $photo)
    {
        $this->photos->attach($photo);
    }

    /**
     * Removes a Photo
     * 
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo $photoToRemove The Photo to be removed
     * @return void
     */
    public function removePhoto(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo $photoToRemove)
    {
        $this->photos->detach($photoToRemove);
    }

    /**
     * Returns the photos
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo> $photos
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Sets the photos
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo> $photos
     * @return void
     */
    public function setPhotos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $photos)
    {
        $this->photos = $photos;
    }
}
