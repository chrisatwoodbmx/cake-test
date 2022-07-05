<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingExpertisesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingExpertisesTable Test Case
 */
class MappingExpertisesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingExpertisesTable
     */
    protected $MappingExpertises;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingExpertises',
        'app.Expertises',
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
        $config = $this->getTableLocator()->exists('MappingExpertises') ? [] : ['className' => MappingExpertisesTable::class];
        $this->MappingExpertises = $this->getTableLocator()->get('MappingExpertises', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingExpertises);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingExpertisesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MappingExpertisesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
