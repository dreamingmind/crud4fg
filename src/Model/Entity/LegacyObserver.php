<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyObserver Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $user_observer_id
 * @property string|null $observer_name
 * @property string|null $type
 * @property string|null $user_name
 * @property string|null $location
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\UserObserver $user_observer
 */
class LegacyObserver extends Entity
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
        'user_id' => true,
        'user_observer_id' => true,
        'observer_name' => true,
        'type' => true,
        'user_name' => true,
        'location' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'user_observer' => true,
    ];
}
