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
 * CommentController
 */
class CommentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * commentRepository
     * 
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\CommentRepository
     */
    protected $commentRepository = null;

    /**
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\CommentRepository $commentRepository
     */
    public function injectCommentRepository(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $comments = $this->commentRepository->findAll();
        $this->view->assign('comments', $comments);
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
     * @param \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment $newComment
     * @return void
     */
    public function createAction(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment $newComment)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->commentRepository->add($newComment);
        $this->redirect('list');
    }
}
