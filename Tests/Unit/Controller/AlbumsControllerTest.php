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
class AlbumsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Controller\AlbumsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Controller\AlbumsController::class)
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
    public function listActionFetchesAllAlbumssFromRepositoryAndAssignsThemToView()
    {

        $allAlbumss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $albumsRepository = $this->getMockBuilder(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\AlbumsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $albumsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAlbumss));
        $this->inject($this->subject, 'albumsRepository', $albumsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('albumss', $allAlbumss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAlbumsToView()
    {
        $albums = new \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Albums();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('albums', $albums);

        $this->subject->showAction($albums);
    }
}
