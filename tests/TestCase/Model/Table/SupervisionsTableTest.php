<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupervisionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupervisionsTable Test Case
 */
class SupervisionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SupervisionsTable
     */
    protected $Supervisions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Supervisions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Supervisions') ? [] : ['className' => SupervisionsTable::class];
        $this->Supervisions = $this->getTableLocator()->get('Supervisions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Supervisions);

        parent::tearDown();
    }
}
