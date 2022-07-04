<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Activity Entity
 *
 * @property int $id
 * @property int $profile_id
 * @property int $action_id
 * @property string $ip_address
 * @property string|null $user_agent
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Profile $profile
 * @property \App\Model\Entity\MappingActivitiesType $mapping_activities_type
 */
class Activity extends Entity
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
        'profile_id' => true,
        'action_id' => true,
        'ip_address' => true,
        'user_agent' => true,
        'created' => true,
        'profile' => true,
        'mapping_activities_type' => true,
    ];
}
