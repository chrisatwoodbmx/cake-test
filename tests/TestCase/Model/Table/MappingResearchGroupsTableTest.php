<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingResearchGroupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingResearchGroupsTable Test Case
 */
class MappingResearchGroupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingResearchGroupsTable
     */
    protected $MappingResearchGroups;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingResearchGroups',
        'app.ResearchGroups',
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
        $config = $this->getTableLocator()->exists('MappingResearchGroups') ? [] : ['className' => MappingResearchGroupsTable::class];
        $this->MappingResearchGroups = $this->getTableLocator()->get('MappingResearchGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingResearchGroups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingResearchGroupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MappingResearchGroupsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
