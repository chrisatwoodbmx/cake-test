<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingActivitiesTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingActivitiesTypesTable Test Case
 */
class MappingActivitiesTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingActivitiesTypesTable
     */
    protected $MappingActivitiesTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingActivitiesTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MappingActivitiesTypes') ? [] : ['className' => MappingActivitiesTypesTable::class];
        $this->MappingActivitiesTypes = $this->getTableLocator()->get('MappingActivitiesTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingActivitiesTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingActivitiesTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
