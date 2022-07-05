<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MappingSpokenLanguagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MappingSpokenLanguagesTable Test Case
 */
class MappingSpokenLanguagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MappingSpokenLanguagesTable
     */
    protected $MappingSpokenLanguages;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MappingSpokenLanguages',
        'app.SpokenLanguages',
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
        $config = $this->getTableLocator()->exists('MappingSpokenLanguages') ? [] : ['className' => MappingSpokenLanguagesTable::class];
        $this->MappingSpokenLanguages = $this->getTableLocator()->get('MappingSpokenLanguages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MappingSpokenLanguages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MappingSpokenLanguagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MappingSpokenLanguagesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
