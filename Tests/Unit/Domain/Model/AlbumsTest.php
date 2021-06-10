<?php
namespace PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Tests\Unit\Domain\Model;

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
class AlbumsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Albums
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Albums();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getShootingDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getShootingDate()
        );
    }

    /**
     * @test
     */
    public function setShootingDateForDateTimeSetsShootingDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setShootingDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'shootingDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getThumbmailReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getThumbmail()
        );
    }

    /**
     * @test
     */
    public function setThumbmailForFileReferenceSetsThumbmail()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setThumbmail($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'thumbmail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhotosReturnsInitialValueForPhoto()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPhotos()
        );
    }

    /**
     * @test
     */
    public function setPhotosForObjectStorageContainingPhotoSetsPhotos()
    {
        $photo = new \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo();
        $objectStorageHoldingExactlyOnePhotos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePhotos->attach($photo);
        $this->subject->setPhotos($objectStorageHoldingExactlyOnePhotos);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePhotos,
            'photos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPhotoToObjectStorageHoldingPhotos()
    {
        $photo = new \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo();
        $photosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photosObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photos', $photosObjectStorageMock);

        $this->subject->addPhoto($photo);
    }

    /**
     * @test
     */
    public function removePhotoFromObjectStorageHoldingPhotos()
    {
        $photo = new \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Photo();
        $photosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photosObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photos', $photosObjectStorageMock);

        $this->subject->removePhoto($photo);
    }
}
