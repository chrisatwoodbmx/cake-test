<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResearchGroupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResearchGroupsTable Test Case
 */
class ResearchGroupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResearchGroupsTable
     */
    protected $ResearchGroups;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ResearchGroups',
        'app.MappingResearchGroups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ResearchGroups') ? [] : ['className' => ResearchGroupsTable::class];
        $this->ResearchGroups = $this->getTableLocator()->get('ResearchGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ResearchGroups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ResearchGroupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ResearchGroupsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
