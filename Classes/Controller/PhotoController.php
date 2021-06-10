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
 * PhotoController
 */
class PhotoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * photoRepository
     * 
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\PhotoRepository
     */
    protected $photoRepository = null;

    /**
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\PhotoRepository $photoRepository
     */
    public function injectPhotoRepository(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\PhotoRepository $photoRepository)
    {
        $this->photoRepository = $photoRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $photos = $this->photoRepository->findAll();
        $this->view->assign('photos', $photos);
    }

    /**
     * action show
     * 
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo $photo
     * @return void
     */
    public function showAction(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo $photo)
    {
        $this->view->assign('photo', $photo);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {
    }

    /**
     * action cartography
     * 
     * @return void
     */
    public function cartographyAction()
    {
    }

    /**
     * action
     * 
     * @return void
     */
    public function Action()
    {
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo $newPhoto
     * @return void
     */
    public function createAction(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo $newPhoto)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->photoRepository->add($newPhoto);
        $this->redirect('list');
    }
}
