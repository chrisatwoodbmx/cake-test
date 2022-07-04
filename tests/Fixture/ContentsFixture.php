<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContentsFixture
 */
class ContentsFixture extends TestFixture
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
                'overview' => '',
                'research' => '',
                'teaching' => '',
                'biography' => '',
                'honours' => '',
                'memberships' => '',
                'academic_positions' => '',
                'engagement' => '',
                'committees' => '',
                'custom_tab_title_id' => 1,
                'custom_tab_content' => '',
                'supervision' => '',
                'past_supervision' => '',
                'thesis_title' => '',
                'thesis_content' => '',
                'funding' => '',
                'funding_sources' => '',
            ],
        ];
        parent::init();
    }
}
