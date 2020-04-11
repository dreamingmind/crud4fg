<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kit Entity
 *
 * @property int $id
 * @property int $kit_id
 * @property int $component_id
 * @property int $quantity
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Kit[] $kits
 * @property \App\Model\Entity\Skus $skus
 */
class Kit extends Entity
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
        'kit_id' => true,
        'component_id' => true,
        'quantity' => true,
        'created' => true,
        'modified' => true,
        'kits' => true,
        'skus' => true,
    ];
}
