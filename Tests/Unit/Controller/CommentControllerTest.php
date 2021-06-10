<?php
namespace PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Valentin MOREL <valentin.morel1@etu.u-bordeaux.fr>
 * @author Romain TALON <romain.talon@etu.u-bordeaux.fr>
 * @author Simon BOTTE <simon.botte@etu.u-bordeaux.fr>
 * @author Axel MORICEAU <axel.moriceau@etu.u-bordeaux.fr>
 * @author ROMAIN ANGIER <romain.angier@etu.u-bordeaux.fr>
 * @author Lauranne APERS <lauranne.apers@etu.u-bordeaux.fr>
 */
class CommentControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Controller\CommentController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Controller\CommentController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCommentsFromRepositoryAndAssignsThemToView()
    {

        $allComments = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $commentRepository = $this->getMockBuilder(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\CommentRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $commentRepository->expects(self::once())->method('findAll')->will(self::returnValue($allComments));
        $this->inject($this->subject, 'commentRepository', $commentRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('comments', $allComments);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCommentToCommentRepository()
    {
        $comment = new \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment();

        $commentRepository = $this->getMockBuilder(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\CommentRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $commentRepository->expects(self::once())->method('add')->with($comment);
        $this->inject($this->subject, 'commentRepository', $commentRepository);

        $this->subject->createAction($comment);
    }
}
