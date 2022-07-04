<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Specialism Entity
 *
 * @property int $id
 * @property array $name
 * @property bool|null $display
 *
 * @property \App\Model\Entity\MappingSpecialism[] $mapping_specialisms
 */
class Specialism extends Entity
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
        'display' => true,
        'mapping_specialisms' => true,
    ];
}
