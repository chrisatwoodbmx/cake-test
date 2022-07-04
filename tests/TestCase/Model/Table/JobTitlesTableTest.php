<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobTitlesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobTitlesTable Test Case
 */
class JobTitlesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JobTitlesTable
     */
    protected $JobTitles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.JobTitles',
        'app.MappingJobTitles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('JobTitles') ? [] : ['className' => JobTitlesTable::class];
        $this->JobTitles = $this->getTableLocator()->get('JobTitles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->JobTitles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\JobTitlesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\JobTitlesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
