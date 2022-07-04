<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Content Entity
 *
 * @property int $id
 * @property int $profile_id
 * @property array|null $overview
 * @property array|null $research
 * @property array|null $teaching
 * @property array|null $biography
 * @property array|null $honours
 * @property array|null $memberships
 * @property array|null $academic_positions
 * @property array|null $engagement
 * @property array|null $committees
 * @property int|null $custom_tab_title_id
 * @property array|null $custom_tab_content
 * @property array|null $supervision
 * @property array|null $past_supervision
 * @property array|null $thesis_title
 * @property array|null $thesis_content
 * @property array|null $funding
 * @property array|null $funding_sources
 *
 * @property \App\Model\Entity\Profile $profile
 * @property \App\Model\Entity\CustomTabTitle $custom_tab_title
 */
class Content extends Entity
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
        'overview' => true,
        'research' => true,
        'teaching' => true,
        'biography' => true,
        'honours' => true,
        'memberships' => true,
        'academic_positions' => true,
        'engagement' => true,
        'committees' => true,
        'custom_tab_title_id' => true,
        'custom_tab_content' => true,
        'supervision' => true,
        'past_supervision' => true,
        'thesis_title' => true,
        'thesis_content' => true,
        'funding' => true,
        'funding_sources' => true,
        'profile' => true,
        'custom_tab_title' => true,
    ];
}
