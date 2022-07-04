<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PronounsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PronounsTable Test Case
 */
class PronounsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PronounsTable
     */
    protected $Pronouns;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pronouns',
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
        $config = $this->getTableLocator()->exists('Pronouns') ? [] : ['className' => PronounsTable::class];
        $this->Pronouns = $this->getTableLocator()->get('Pronouns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pronouns);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PronounsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
