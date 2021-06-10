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
class CommentTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Comment();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForStringSetsAuthor()
    {
        $this->subject->setAuthor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContent()
        );
    }

    /**
     * @test
     */
    public function setContentForStringSetsContent()
    {
        $this->subject->setContent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'content',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMarkReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMark()
        );
    }

    /**
     * @test
     */
    public function setMarkForIntSetsMark()
    {
        $this->subject->setMark(12);

        self::assertAttributeEquals(
            12,
            'mark',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }
}
