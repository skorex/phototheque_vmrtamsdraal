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
 * Tag
 */
class Tag extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * titre
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * couleur
     * 
     * @var int
     */
    protected $color = 0;

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
     * Returns the color
     * 
     * @return int $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets the color
     * 
     * @param int $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}
