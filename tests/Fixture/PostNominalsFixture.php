<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PostNominalsFixture
 */
class PostNominalsFixture extends TestFixture
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
                'post_nominal' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
