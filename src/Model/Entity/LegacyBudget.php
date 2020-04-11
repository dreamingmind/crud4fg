<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyBudget Entity
 *
 * @property int $id
 * @property int $user_id
 * @property bool|null $use_budget
 * @property float|null $budget
 * @property float|null $remaining_budget
 * @property bool|null $use_item_budget
 * @property int|null $item_budget
 * @property int|null $remaining_item_budget
 * @property string|null $budget_month
 * @property bool|null $current
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class LegacyBudget extends Entity
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
        'use_budget' => true,
        'budget' => true,
        'remaining_budget' => true,
        'use_item_budget' => true,
        'item_budget' => true,
        'remaining_item_budget' => true,
        'budget_month' => true,
        'current' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
