<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpokenLanguagesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpokenLanguagesTable Test Case
 */
class SpokenLanguagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpokenLanguagesTable
     */
    protected $SpokenLanguages;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.SpokenLanguages',
        'app.MappingSpokenLanguages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SpokenLanguages') ? [] : ['className' => SpokenLanguagesTable::class];
        $this->SpokenLanguages = $this->getTableLocator()->get('SpokenLanguages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->SpokenLanguages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SpokenLanguagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
