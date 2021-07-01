<?php
namespace PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Controller;


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
 * AlbumController
 */
class AlbumController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * albumRepository
     * 
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\AlbumRepository
     */
    protected $albumRepository = null;

    /**
     * action list
     * 
     * @param PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Album
     * @return void
     */
    public function listAction()
    {
        $albums = $this->albumRepository->findAll();
        $this->view->assign('albums', $albums);
    }

    /**
     * action show
     * 
     * @param PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Album
     * @return void
     */
    public function showAction(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Album $album)
    {
        $this->view->assign('album', $album);
    }

    /**
     * action search
     * 
     * @param PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Album
     * @return void
     */
    public function searchAction()
    {
    }

    /**
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\AlbumRepository $AlbumRepository
     */
    public function injectAlbumRepository(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\AlbumRepository $albumRepository)
    {
        $this->albumRepository = $albumRepository;
    }
}
