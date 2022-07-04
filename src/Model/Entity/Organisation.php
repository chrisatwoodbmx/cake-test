<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organisation Entity
 *
 * @property int $id
 * @property int|null $parent_id
 * @property array $name
 *
 * @property \App\Model\Entity\ParentOrganisation $parent_organisation
 * @property \App\Model\Entity\MappingOrganisation[] $mapping_organisations
 * @property \App\Model\Entity\ChildOrganisation[] $child_organisations
 */
class Organisation extends Entity
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
        'parent_organisation' => true,
        'mapping_organisations' => true,
        'child_organisations' => true,
    ];
}
