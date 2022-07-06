<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingVisibilitiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingVisibilitiesTable Test Case
 */
class MappingVisibilitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingVisibilitiesTable
     */
    protected $MappingVisibilities;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingVisibilities',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MappingVisibilities') ? [] : ['className' => MappingVisibilitiesTable::class];
        $this->MappingVisibilities = $this->getTableLocator()->get('MappingVisibilities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingVisibilities);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingVisibilitiesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
