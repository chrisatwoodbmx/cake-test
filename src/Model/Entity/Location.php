<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Location Entity
 *
 * @property int $id
 * @property array $name
 * @property string $estate_code
 * @property string $squiz_code
 * @property string|null $coordinate
 * @property array $address_1
 * @property array|null $address_2
 * @property array|null $city
 * @property array|null $region
 * @property string $postcode
 * @property array $web_address
 *
 * @property \App\Model\Entity\MappingLocation[] $mapping_locations
 */
class Location extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'estate_code' => true,
        'squiz_code' => true,
        'coordinate' => true,
        'address_1' => true,
        'address_2' => true,
        'city' => true,
        'region' => true,
        'postcode' => true,
        'web_address' => true,
        'mapping_locations' => true,
    ];
}
