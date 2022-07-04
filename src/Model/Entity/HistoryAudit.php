<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HistoryAudit Entity
 *
 * @property int $id
 * @property string $table
 * @property string $field
 * @property int $record_id
 * @property array|null $old
 * @property array $new
 * @property int $profile_id
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Record $record
 * @property \App\Model\Entity\Profile $profile
 */
class HistoryAudit extends Entity
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
        'table' => true,
        'field' => true,
        'record_id' => true,
        'old' => true,
        'new' => true,
        'profile_id' => true,
        'created' => true,
        'record' => true,
        'profile' => true,
    ];
}
