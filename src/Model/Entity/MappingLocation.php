<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MappingLocation Entity
 *
 * @property int $id
 * @property int $location_id
 * @property int $profile_id
 * @property array $room
 * @property array|null $floor
 * @property array|null $office_hours
 *
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\Profile $profile
 */
class MappingLocation extends Entity
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
        'location_id' => true,
        'profile_id' => true,
        'room' => true,
        'floor' => true,
        'office_hours' => true,
        'location' => true,
        'profile' => true,
    ];
}
