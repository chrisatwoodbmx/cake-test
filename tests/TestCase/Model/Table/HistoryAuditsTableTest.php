<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoryAuditsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoryAuditsTable Test Case
 */
class HistoryAuditsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoryAuditsTable
     */
    protected $HistoryAudits;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.HistoryAudits',
        'app.Records',
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
        $config = $this->getTableLocator()->exists('HistoryAudits') ? [] : ['className' => HistoryAuditsTable::class];
        $this->HistoryAudits = $this->getTableLocator()->get('HistoryAudits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->HistoryAudits);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HistoryAuditsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\HistoryAuditsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
