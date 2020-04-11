<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LegacyUsers Model
 *
 * @property \App\Model\Table\LegacyUsersTable&\Cake\ORM\Association\BelongsTo $ParentLegacyUsers
 * @property \App\Model\Table\LegacyUsersTable&\Cake\ORM\Association\HasMany $ChildLegacyUsers
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\LegacyUser newEmptyEntity()
 * @method \App\Model\Entity\LegacyUser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\LegacyUser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LegacyUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyUser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyUser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyUser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyUser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyUser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LegacyUsersTable extends Table
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

        $this->setTable('legacy_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ParentLegacyUsers', [
            'className' => 'LegacyUsers',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('ChildLegacyUsers', [
            'className' => 'LegacyUsers',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'legacy_user_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'legacy_users_users',
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
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 40)
            ->allowEmptyString('password');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 50)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50)
            ->allowEmptyString('last_name');

        $validator
            ->integer('active')
            ->allowEmptyString('active');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->allowEmptyString('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('role')
            ->maxLength('role', 50)
            ->allowEmptyString('role');

        $validator
            ->scalar('ancestor_list')
            ->maxLength('ancestor_list', 255)
            ->allowEmptyString('ancestor_list');

        $validator
            ->integer('lock')
            ->allowEmptyString('lock');

        $validator
            ->numeric('sequence')
            ->allowEmptyString('sequence');

        $validator
            ->boolean('folder')
            ->allowEmptyString('folder');

        $validator
            ->boolean('session_change')
            ->allowEmptyString('session_change');

        $validator
            ->boolean('verified')
            ->allowEmptyString('verified');

        $validator
            ->allowEmptyString('logged_in');

        $validator
            ->scalar('cart_session')
            ->maxLength('cart_session', 36)
            ->allowEmptyString('cart_session');

        $validator
            ->boolean('use_budget')
            ->allowEmptyString('use_budget');

        $validator
            ->numeric('budget')
            ->allowEmptyString('budget');

        $validator
            ->boolean('use_item_budget')
            ->allowEmptyString('use_item_budget');

        $validator
            ->allowEmptyString('item_budget');

        $validator
            ->boolean('rollover_item_budget')
            ->allowEmptyString('rollover_item_budget');

        $validator
            ->boolean('rollover_budget')
            ->allowEmptyString('rollover_budget');

        $validator
            ->boolean('use_item_limit_budget')
            ->allowEmptyString('use_item_limit_budget');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['parent_id'], 'ParentLegacyUsers'));

        return $rules;
    }
}
