<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Com Entity
 *
 * @property int $id
 * @property int $address_id
 * @property string $type
 * @property string $channel
 * @property int $primary
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $old_address_id
 *
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\OldAddress $old_address
 */
class Com extends Entity
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
        'address_id' => true,
        'type' => true,
        'channel' => true,
        'primary' => true,
        'created' => true,
        'modified' => true,
        'old_address_id' => true,
        'address' => true,
        'old_address' => true,
    ];
}
