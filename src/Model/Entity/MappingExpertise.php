<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MappingExpertise Entity
 *
 * @property int $id
 * @property int $expertise_id
 * @property int $profile_id
 *
 * @property \App\Model\Entity\Expertise $expertise
 * @property \App\Model\Entity\Profile $profile
 */
class MappingExpertise extends Entity
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
        'expertise_id' => true,
        'profile_id' => true,
        'expertise' => true,
        'profile' => true,
    ];
}
