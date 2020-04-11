<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyUsersUser Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $user_managed_id
 * @property int|null $user_manager_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\LegacyUser $legacy_user
 * @property \App\Model\Entity\UserManaged $user_managed
 * @property \App\Model\Entity\UserManager $user_manager
 */
class LegacyUsersUser extends Entity
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
        'user_managed_id' => true,
        'user_manager_id' => true,
        'user' => true,
        'legacy_user' => true,
        'user_managed' => true,
        'user_manager' => true,
    ];
}
