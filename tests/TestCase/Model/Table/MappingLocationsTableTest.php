<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingLocationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingLocationsTable Test Case
 */
class MappingLocationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingLocationsTable
     */
    protected $MappingLocations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingLocations',
        'app.Locations',
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
        $config = $this->getTableLocator()->exists('MappingLocations') ? [] : ['className' => MappingLocationsTable::class];
        $this->MappingLocations = $this->getTableLocator()->get('MappingLocations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingLocations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingLocationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MappingLocationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
