<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingSpecialismsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingSpecialismsTable Test Case
 */
class MappingSpecialismsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingSpecialismsTable
     */
    protected $MappingSpecialisms;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingSpecialisms',
        'app.Specialisms',
        'app.Profiles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MappingSpecialisms') ? [] : ['className' => MappingSpecialismsTable::class];
        $this->MappingSpecialisms = $this->getTableLocator()->get('MappingSpecialisms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingSpecialisms);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingSpecialismsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MappingSpecialismsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
