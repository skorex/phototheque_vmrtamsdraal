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
 * TagController
 */
class TagController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * tagRepository
     * 
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\TagRepository
     */
    protected $tagRepository = null;

    /**
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\TagRepository $tagRepository
     */
    public function injectTagRepository(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

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
        $tags = $this->tagRepository->findAll();
        $this->view->assign('tags', $tags);
    }

    /**
     * action show
     * 
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag $tag
     * @return void
     */
    public function showAction(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag $tag)
    {
        $this->view->assign('tag', $tag);
        $photos = $this->photoRepository->findByTag($tag);
        $this->view->assign('photos', $photos);
    }
}
