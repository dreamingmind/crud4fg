<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\PeopleTable&\Cake\ORM\Association\BelongsTo $People
 * @property \App\Model\Table\OldUsersTable&\Cake\ORM\Association\BelongsTo $OldUsers
 * @property \App\Model\Table\LegacyAddressesTable&\Cake\ORM\Association\HasMany $LegacyAddresses
 * @property \App\Model\Table\LegacyBudgetsTable&\Cake\ORM\Association\HasMany $LegacyBudgets
 * @property \App\Model\Table\LegacyCustomersTable&\Cake\ORM\Association\HasMany $LegacyCustomers
 * @property \App\Model\Table\LegacyObserversTable&\Cake\ORM\Association\HasMany $LegacyObservers
 * @property \App\Model\Table\LegacyPreferencesTable&\Cake\ORM\Association\HasMany $LegacyPreferences
 * @property \App\Model\Table\LegacyUserRegistriesTable&\Cake\ORM\Association\HasMany $LegacyUserRegistries
 * @property \App\Model\Table\PreferencesTable&\Cake\ORM\Association\HasMany $Preferences
 * @property \App\Model\Table\LegacyCatalogsTable&\Cake\ORM\Association\BelongsToMany $LegacyCatalogs
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OldUsers', [
'className' => 'LegacyUsers',
'foreignKey' => 'old_user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('LegacyAddresses', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('LegacyBudgets', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('LegacyCustomers', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('LegacyObservers', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('LegacyPreferences', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('LegacyUserRegistries', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Preferences', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsToMany('LegacyCatalogs', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'legacy_catalog_id',
            'joinTable' => 'legacy_catalogs_users',
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
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->integer('active')
            ->allowEmptyString('active');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->allowEmptyString('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->boolean('verified')
            ->allowEmptyString('verified');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['person_id'], 'People'));
        $rules->add($rules->existsIn(['old_user_id'], 'OldUsers'));

        return $rules;
    }
}
