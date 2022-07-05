<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingTeamsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingTeamsTable Test Case
 */
class MappingTeamsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingTeamsTable
     */
    protected $MappingTeams;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingTeams',
        'app.Teams',
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
        $config = $this->getTableLocator()->exists('MappingTeams') ? [] : ['className' => MappingTeamsTable::class];
        $this->MappingTeams = $this->getTableLocator()->get('MappingTeams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingTeams);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingTeamsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MappingTeamsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
