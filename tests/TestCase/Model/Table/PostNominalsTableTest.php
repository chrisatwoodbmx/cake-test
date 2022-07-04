<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostNominalsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostNominalsTable Test Case
 */
class PostNominalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PostNominalsTable
     */
    protected $PostNominals;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PostNominals',
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
        $config = $this->getTableLocator()->exists('PostNominals') ? [] : ['className' => PostNominalsTable::class];
        $this->PostNominals = $this->getTableLocator()->get('PostNominals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PostNominals);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PostNominalsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
