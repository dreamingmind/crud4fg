<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyAddress Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $name
 * @property string|null $company
 * @property string|null $address
 * @property string|null $address2
 * @property string|null $address3
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property string|null $country
 * @property float|null $sequence
 * @property int|null $active
 * @property string|null $type
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $phone
 * @property int|null $epms_vendor_id
 * @property int|null $tax_rate_id
 * @property string|null $fedex_acct
 * @property string|null $ups_acct
 * @property bool|null $residence
 * @property int|null $customer_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EpmsVendor $epms_vendor
 * @property \App\Model\Entity\TaxRate $tax_rate
 * @property \App\Model\Entity\Customer $customer
 */
class LegacyAddress extends Entity
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
        'name' => true,
        'company' => true,
        'address' => true,
        'address2' => true,
        'address3' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'country' => true,
        'sequence' => true,
        'active' => true,
        'type' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'phone' => true,
        'epms_vendor_id' => true,
        'tax_rate_id' => true,
        'fedex_acct' => true,
        'ups_acct' => true,
        'residence' => true,
        'customer_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'epms_vendor' => true,
        'tax_rate' => true,
        'customer' => true,
    ];
}
