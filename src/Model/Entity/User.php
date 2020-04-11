<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $email
 * @property string $password
 * @property int|null $active
 * @property string|null $username
 * @property int $person_id
 * @property bool|null $verified
 * @property int $old_user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\OldUser $old_user
 * @property \App\Model\Entity\LegacyAddress[] $legacy_addresses
 * @property \App\Model\Entity\LegacyBudget[] $legacy_budgets
 * @property \App\Model\Entity\LegacyCustomer[] $legacy_customers
 * @property \App\Model\Entity\LegacyObserver[] $legacy_observers
 * @property \App\Model\Entity\LegacyPreference[] $legacy_preferences
 * @property \App\Model\Entity\LegacyUserRegistry[] $legacy_user_registries
 * @property \App\Model\Entity\Preference[] $preferences
 * @property \App\Model\Entity\LegacyCatalog[] $legacy_catalogs
 */
class User extends Entity
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
        'active' => true,
        'username' => true,
        'person_id' => true,
        'verified' => true,
        'old_user_id' => true,
        'created' => true,
        'modified' => true,
        'person' => true,
        'old_user' => true,
        'legacy_addresses' => true,
        'legacy_budgets' => true,
        'legacy_customers' => true,
        'legacy_observers' => true,
        'legacy_preferences' => true,
        'legacy_user_registries' => true,
        'preferences' => true,
        'legacy_catalogs' => true,
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
