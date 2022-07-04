<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExpertisesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExpertisesTable Test Case
 */
class ExpertisesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExpertisesTable
     */
    protected $Expertises;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Expertises',
        'app.MappingExpertises',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Expertises') ? [] : ['className' => ExpertisesTable::class];
        $this->Expertises = $this->getTableLocator()->get('Expertises', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Expertises);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExpertisesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ExpertisesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
