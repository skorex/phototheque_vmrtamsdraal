<?php
namespace PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository;
use PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag;

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
 * The repository for Photos
 */
class PhotoRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function findByTag(Tag $tag) {
        $query = $this->createQuery();

        return $query->matching($query->contains('tags', $tag))->execute();
    }
}
