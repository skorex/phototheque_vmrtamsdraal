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
class TagTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PhotothequeVMRTAMSBRAAL\PhotothequeVmrtamsdraal\Domain\Model\Tag();
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
    public function getColorReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getColor()
        );
    }

    /**
     * @test
     */
    public function setColorForIntSetsColor()
    {
        $this->subject->setColor(12);

        self::assertAttributeEquals(
            12,
            'color',
            $this->subject
        );
    }
}
