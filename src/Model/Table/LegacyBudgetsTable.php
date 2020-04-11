<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LegacyBudgets Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\LegacyBudget newEmptyEntity()
 * @method \App\Model\Entity\LegacyBudget newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyBudget[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyBudget get($primaryKey, $options = [])
 * @method \App\Model\Entity\LegacyBudget findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LegacyBudget patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyBudget[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyBudget|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyBudget saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyBudget[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyBudget[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyBudget[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyBudget[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LegacyBudgetsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('legacy_budgets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->boolean('use_budget')
            ->allowEmptyString('use_budget');

        $validator
            ->numeric('budget')
            ->allowEmptyString('budget');

        $validator
            ->numeric('remaining_budget')
            ->allowEmptyString('remaining_budget');

        $validator
            ->boolean('use_item_budget')
            ->allowEmptyString('use_item_budget');

        $validator
            ->allowEmptyString('item_budget');

        $validator
            ->allowEmptyString('remaining_item_budget');

        $validator
            ->scalar('budget_month')
            ->maxLength('budget_month', 7)
            ->allowEmptyString('budget_month');

        $validator
            ->boolean('current')
            ->allowEmptyString('current');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
