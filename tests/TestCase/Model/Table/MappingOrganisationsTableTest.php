<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingOrganisationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingOrganisationsTable Test Case
 */
class MappingOrganisationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingOrganisationsTable
     */
    protected $MappingOrganisations;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingOrganisations',
        'app.Organisations',
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
        $config = $this->getTableLocator()->exists('MappingOrganisations') ? [] : ['className' => MappingOrganisationsTable::class];
        $this->MappingOrganisations = $this->getTableLocator()->get('MappingOrganisations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingOrganisations);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingOrganisationsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MappingOrganisationsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
