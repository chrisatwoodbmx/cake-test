<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactDetailsFixture
 */
class ContactDetailsFixture extends TestFixture
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
                'profile_id' => 1,
                'email' => '',
                'telephone' => 'Lorem ipsum do',
                'personal_website' => '',
                'blog' => '',
                'linkedin' => 'Lorem ipsum dolor sit amet',
                'twitter_username' => 'Lorem ipsum d',
                'google_scholar' => 'Lorem ipsum dolor sit amet',
                'acadamia' => 'Lorem ipsum dolor sit amet',
                'research_gate' => 'Lorem ipsum dolor sit amet',
                'orcid' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
