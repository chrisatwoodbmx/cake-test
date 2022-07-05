<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SpokenLanguage Entity
 *
 * @property int $id
 * @property array $name
 *
 * @property \App\Model\Entity\MappingSpokenLanguage[] $mapping_spoken_languages
 */
class SpokenLanguage extends Entity
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
        'mapping_spoken_languages' => true,
    ];
}
