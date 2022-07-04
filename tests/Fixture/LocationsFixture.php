<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LocationsFixture
 */
class LocationsFixture extends TestFixture
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
                'name' => '',
                'estate_code' => 'Lorem ip',
                'squiz_code' => 'Lorem ',
                'coordinate' => 'Lorem ipsum dolor sit amet',
                'address_1' => '',
                'address_2' => '',
                'city' => '',
                'region' => '',
                'postcode' => 'Lorem ',
                'web_address' => '',
            ],
        ];
        parent::init();
    }
}
