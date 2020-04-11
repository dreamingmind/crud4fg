<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * People Model
 *
 * @property \App\Model\Table\PeopleTable&\Cake\ORM\Association\BelongsTo $People
 * @property \App\Model\Table\TenantsTable&\Cake\ORM\Association\BelongsTo $Tenants
 * @property \App\Model\Table\WarehousesTable&\Cake\ORM\Association\BelongsTo $Warehouses
 * @property \App\Model\Table\PeopleTable&\Cake\ORM\Association\BelongsTo $ParentPeople
 * @property \App\Model\Table\OldUsersTable&\Cake\ORM\Association\BelongsTo $OldUsers
 * @property \App\Model\Table\AddressesTable&\Cake\ORM\Association\HasMany $Addresses
 * @property \App\Model\Table\ImagesTable&\Cake\ORM\Association\HasMany $Images
 * @property \App\Model\Table\PeopleTable&\Cake\ORM\Association\HasMany $ChildPeople
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Person newEmptyEntity()
 * @method \App\Model\Entity\Person newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Person[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Person get($primaryKey, $options = [])
 * @method \App\Model\Entity\Person findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Person patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Person[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Person|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Person[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Person[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Person[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PeopleTable extends Table
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

        $this->setTable('people');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
        ]);
        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id',
        ]);
        $this->belongsTo('Warehouses', [
            'foreignKey' => 'warehouse_id',
        ]);
        $this->belongsTo('ParentPeople', [
            'className' => 'People',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsTo('OldUsers', [
'className' => 'LegacyUsers',
'foreignKey' => 'old_user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Addresses', [
            'foreignKey' => 'person_id',
        ]);
        $this->hasMany('Images', [
            'foreignKey' => 'person_id',
        ]);
        $this->hasMany('People', [
            'foreignKey' => 'person_id',
        ]);
        $this->hasMany('ChildPeople', [
            'className' => 'People',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'person_id',
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
            ->scalar('first_name')
            ->maxLength('first_name', 75)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 75)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->scalar('role')
            ->maxLength('role', 50)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->scalar('pronoun')
            ->maxLength('pronoun', 25)
            ->requirePresence('pronoun', 'create')
            ->notEmptyString('pronoun');

        $validator
            ->uuid('cart_session')
            ->requirePresence('cart_session', 'create')
            ->notEmptyString('cart_session');

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
        $rules->add($rules->existsIn(['person_id'], 'People'));
        $rules->add($rules->existsIn(['tenant_id'], 'Tenants'));
        $rules->add($rules->existsIn(['warehouse_id'], 'Warehouses'));
        $rules->add($rules->existsIn(['parent_id'], 'ParentPeople'));
        $rules->add($rules->existsIn(['old_user_id'], 'OldUsers'));

        return $rules;
    }
}
