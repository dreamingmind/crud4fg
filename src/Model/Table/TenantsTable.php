<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tenants Model
 *
 * @property \App\Model\Table\WarehousesTable&\Cake\ORM\Association\BelongsTo $Warehouses
 * @property \App\Model\Table\OldUsersTable&\Cake\ORM\Association\BelongsTo $OldUsers
 * @property \App\Model\Table\AddressesTable&\Cake\ORM\Association\HasMany $Addresses
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\HasMany $Items
 * @property \App\Model\Table\PeopleTable&\Cake\ORM\Association\HasMany $People
 * @property \App\Model\Table\ShippingAccountsTable&\Cake\ORM\Association\HasMany $ShippingAccounts
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\HasMany $Stores
 * @property \App\Model\Table\TenantContractsTable&\Cake\ORM\Association\HasMany $TenantContracts
 *
 * @method \App\Model\Entity\Tenant newEmptyEntity()
 * @method \App\Model\Entity\Tenant newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tenant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tenant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tenant findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tenant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tenant[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tenant|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tenant saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tenant[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tenant[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tenant[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tenant[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TenantsTable extends Table
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

        $this->setTable('tenants');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Warehouses', [
            'foreignKey' => 'warehouse_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OldUsers', [
'className' => 'LegacyUsers',
'foreignKey' => 'old_user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Addresses', [
            'foreignKey' => 'tenant_id',
        ]);
        $this->hasMany('Items', [
            'foreignKey' => 'tenant_id',
        ]);
        $this->hasMany('People', [
            'foreignKey' => 'tenant_id',
        ]);
        $this->hasMany('ShippingAccounts', [
            'foreignKey' => 'tenant_id',
        ]);
        $this->hasMany('Stores', [
            'foreignKey' => 'tenant_id',
        ]);
        $this->hasMany('TenantContracts', [
            'foreignKey' => 'tenant_id',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('customer_code')
            ->maxLength('customer_code', 255)
            ->requirePresence('customer_code', 'create')
            ->notEmptyString('customer_code');

        $validator
            ->scalar('token')
            ->maxLength('token', 255)
            ->requirePresence('token', 'create')
            ->notEmptyString('token');

        $validator
            ->requirePresence('active', 'create')
            ->notEmptyString('active');

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
        $rules->add($rules->existsIn(['warehouse_id'], 'Warehouses'));
        $rules->add($rules->existsIn(['old_user_id'], 'OldUsers'));

        return $rules;
    }
}
