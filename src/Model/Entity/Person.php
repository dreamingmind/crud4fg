<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property int|null $person_id
 * @property int|null $tenant_id
 * @property int|null $warehouse_id
 * @property string $first_name
 * @property string $last_name
 * @property string $role
 * @property int $parent_id
 * @property int $old_user_id
 * @property string $pronoun
 * @property string $cart_session
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Person[] $people
 * @property \App\Model\Entity\Tenant $tenant
 * @property \App\Model\Entity\Warehouse $warehouse
 * @property \App\Model\Entity\ParentPerson $parent_person
 * @property \App\Model\Entity\OldUser $old_user
 * @property \App\Model\Entity\Address[] $addresses
 * @property \App\Model\Entity\Image[] $images
 * @property \App\Model\Entity\ChildPerson[] $child_people
 * @property \App\Model\Entity\User[] $users
 */
class Person extends Entity
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
        'person_id' => true,
        'tenant_id' => true,
        'warehouse_id' => true,
        'first_name' => true,
        'last_name' => true,
        'role' => true,
        'parent_id' => true,
        'old_user_id' => true,
        'pronoun' => true,
        'cart_session' => true,
        'created' => true,
        'modified' => true,
        'people' => true,
        'tenant' => true,
        'warehouse' => true,
        'parent_person' => true,
        'old_user' => true,
        'addresses' => true,
        'images' => true,
        'child_people' => true,
        'users' => true,
    ];
}
