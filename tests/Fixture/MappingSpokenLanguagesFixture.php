<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MappingSpokenLanguagesFixture
 */
class MappingSpokenLanguagesFixture extends TestFixture
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
                'spoken_language_id' => 1,
                'profile_id' => 1,
            ],
        ];
        parent::init();
    }
}
