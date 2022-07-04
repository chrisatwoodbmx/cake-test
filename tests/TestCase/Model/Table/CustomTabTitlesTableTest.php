<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomTabTitlesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomTabTitlesTable Test Case
 */
class CustomTabTitlesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomTabTitlesTable
     */
    protected $CustomTabTitles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CustomTabTitles',
        'app.Contents',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CustomTabTitles') ? [] : ['className' => CustomTabTitlesTable::class];
        $this->CustomTabTitles = $this->getTableLocator()->get('CustomTabTitles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CustomTabTitles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CustomTabTitlesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CustomTabTitlesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
