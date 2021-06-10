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
class AlbumControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Controller\AlbumController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Controller\AlbumController::class)
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
    public function listActionFetchesAllAlbumsFromRepositoryAndAssignsThemToView()
    {

        $allAlbums = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $albumRepository = $this->getMockBuilder(\PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Repository\AlbumRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $albumRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAlbums));
        $this->inject($this->subject, 'albumRepository', $albumRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('albums', $allAlbums);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAlbumToView()
    {
        $album = new \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Album();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('album', $album);

        $this->subject->showAction($album);
    }
}
