<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ResearchGroup Entity
 *
 * @property int $id
 * @property int|null $parent_id
 * @property array $name
 *
 * @property \App\Model\Entity\ParentResearchGroup $parent_research_group
 * @property \App\Model\Entity\MappingResearchGroup[] $mapping_research_groups
 * @property \App\Model\Entity\ChildResearchGroup[] $child_research_groups
 */
class ResearchGroup extends Entity
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
        'parent_id' => true,
        'name' => true,
        'parent_research_group' => true,
        'mapping_research_groups' => true,
        'child_research_groups' => true,
    ];
}
