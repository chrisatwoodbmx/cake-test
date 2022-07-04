<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PronounsFixture
 */
class PronounsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'pronoun' => 'Lorem ipsum dolor sit a',
            ],
        ];
        parent::init();
    }
}
