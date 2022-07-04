<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Expertise Entity
 *
 * @property int $id
 * @property array $name
 * @property bool $display
 *
 * @property \App\Model\Entity\MappingExpertise[] $mapping_expertises
 */
class Expertise extends Entity
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
        'mapping_expertises' => true,
    ];
}
