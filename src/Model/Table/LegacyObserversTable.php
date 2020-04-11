<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LegacyObservers Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\UserObserversTable&\Cake\ORM\Association\BelongsTo $UserObservers
 *
 * @method \App\Model\Entity\LegacyObserver newEmptyEntity()
 * @method \App\Model\Entity\LegacyObserver newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyObserver[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyObserver get($primaryKey, $options = [])
 * @method \App\Model\Entity\LegacyObserver findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LegacyObserver patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyObserver[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyObserver|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyObserver saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyObserver[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyObserver[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyObserver[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyObserver[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LegacyObserversTable extends Table
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

        $this->setTable('legacy_observers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('UserObservers', [
            'foreignKey' => 'user_observer_id',
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
            ->scalar('observer_name')
            ->maxLength('observer_name', 150)
            ->allowEmptyString('observer_name');

        $validator
            ->scalar('type')
            ->maxLength('type', 100)
            ->allowEmptyString('type');

        $validator
            ->scalar('user_name')
            ->maxLength('user_name', 150)
            ->allowEmptyString('user_name');

        $validator
            ->scalar('location')
            ->allowEmptyString('location');

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
        $rules->add($rules->existsIn(['user_observer_id'], 'UserObservers'));

        return $rules;
    }
}
