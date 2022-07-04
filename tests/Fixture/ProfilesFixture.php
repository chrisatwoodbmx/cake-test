<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilesFixture
 */
class ProfilesFixture extends TestFixture
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
                'uuid' => '35dbd573-b50c-42a0-ab4a-5b665efd875b',
                'username' => 'Lorem ipsum dolor sit a',
                'profile_type' => 1,
                'visibility_id' => 1,
                'title_id' => 1,
                'first_name' => 'Lorem ipsum dolor sit amet',
                'middle_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'known_as' => '',
                'is_media_expert' => 1,
                'is_welsh_speaker' => 1,
                'available_supervise' => 1,
                'archived' => 1,
                'inactive' => 1,
                'created' => 1656948488,
                'post_nominal_id' => 1,
                'pronoun_id' => 1,
            ],
        ];
        parent::init();
    }
}
