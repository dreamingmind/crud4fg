<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyUserRegistry Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $user_id
 * @property int|null $node_id
 * @property string|null $model
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Node $node
 */
class LegacyUserRegistry extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'node_id' => true,
        'model' => true,
        'user' => true,
        'node' => true,
    ];
}
