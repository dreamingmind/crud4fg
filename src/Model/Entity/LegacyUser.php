<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyUser Entity
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $password
 * @property string|null $first_name
 * @property string|null $last_name
 * @property int|null $active
 * @property string|null $username
 * @property string|null $role
 * @property float|null $parent_id
 * @property string|null $ancestor_list
 * @property int|null $lock
 * @property float|null $sequence
 * @property bool|null $folder
 * @property bool|null $session_change
 * @property bool|null $verified
 * @property int|null $logged_in
 * @property string|null $cart_session
 * @property bool|null $use_budget
 * @property float|null $budget
 * @property bool|null $use_item_budget
 * @property int|null $item_budget
 * @property bool|null $rollover_item_budget
 * @property bool|null $rollover_budget
 * @property bool|null $use_item_limit_budget
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ParentLegacyUser $parent_legacy_user
 * @property \App\Model\Entity\ChildLegacyUser[] $child_legacy_users
 * @property \App\Model\Entity\User[] $users
 */
class LegacyUser extends Entity
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
        'email' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'active' => true,
        'username' => true,
        'role' => true,
        'parent_id' => true,
        'ancestor_list' => true,
        'lock' => true,
        'sequence' => true,
        'folder' => true,
        'session_change' => true,
        'verified' => true,
        'logged_in' => true,
        'cart_session' => true,
        'use_budget' => true,
        'budget' => true,
        'use_item_budget' => true,
        'item_budget' => true,
        'rollover_item_budget' => true,
        'rollover_budget' => true,
        'use_item_limit_budget' => true,
        'created' => true,
        'modified' => true,
        'parent_legacy_user' => true,
        'child_legacy_users' => true,
        'users' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
