<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingJobTitlesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingJobTitlesTable Test Case
 */
class MappingJobTitlesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingJobTitlesTable
     */
    protected $MappingJobTitles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingJobTitles',
        'app.JobTitles',
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
        $config = $this->getTableLocator()->exists('MappingJobTitles') ? [] : ['className' => MappingJobTitlesTable::class];
        $this->MappingJobTitles = $this->getTableLocator()->get('MappingJobTitles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingJobTitles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingJobTitlesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MappingJobTitlesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
