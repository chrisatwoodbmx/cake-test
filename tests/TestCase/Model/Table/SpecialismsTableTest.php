<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialismsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialismsTable Test Case
 */
class SpecialismsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialismsTable
     */
    protected $Specialisms;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Specialisms',
        'app.MappingSpecialisms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Specialisms') ? [] : ['className' => SpecialismsTable::class];
        $this->Specialisms = $this->getTableLocator()->get('Specialisms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Specialisms);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SpecialismsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SpecialismsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
