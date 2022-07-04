<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactDetailsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactDetailsTable Test Case
 */
class ContactDetailsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactDetailsTable
     */
    protected $ContactDetails;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ContactDetails',
        'app.Profiles',
        'app.Linkedins',
        'app.GoogleScholars',
        'app.Acadamias',
        'app.Orcids',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ContactDetails') ? [] : ['className' => ContactDetailsTable::class];
        $this->ContactDetails = $this->getTableLocator()->get('ContactDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ContactDetails);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContactDetailsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ContactDetailsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
