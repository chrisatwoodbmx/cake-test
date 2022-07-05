<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MappingResearchGroup Entity
 *
 * @property int $id
 * @property int $research_group_id
 * @property int $profile_id
 *
 * @property \App\Model\Entity\ResearchGroup $research_group
 * @property \App\Model\Entity\Profile $profile
 */
class MappingResearchGroup extends Entity
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
        'research_group_id' => true,
        'profile_id' => true,
        'research_group' => true,
        'profile' => true,
    ];
}
