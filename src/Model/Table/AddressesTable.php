<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Addresses Model
 *
 * @property \App\Model\Table\ShippingAccountsTable&\Cake\ORM\Association\BelongsTo $ShippingAccounts
 * @property \App\Model\Table\WarehousesTable&\Cake\ORM\Association\BelongsTo $Warehouses
 * @property \App\Model\Table\TenantsTable&\Cake\ORM\Association\BelongsTo $Tenants
 * @property \App\Model\Table\PeopleTable&\Cake\ORM\Association\BelongsTo $People
 * @property \App\Model\Table\OldAddressesTable&\Cake\ORM\Association\BelongsTo $OldAddresses
 * @property \App\Model\Table\ComsTable&\Cake\ORM\Association\HasMany $Coms
 * @property \App\Model\Table\LegacyCustomersTable&\Cake\ORM\Association\HasMany $LegacyCustomers
 *
 * @method \App\Model\Entity\Address newEmptyEntity()
 * @method \App\Model\Entity\Address newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Address[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Address get($primaryKey, $options = [])
 * @method \App\Model\Entity\Address findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Address patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Address[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Address|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Address saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Address[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Address[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Address[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Address[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AddressesTable extends Table
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

        $this->setTable('addresses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ShippingAccounts', [
            'foreignKey' => 'shipping_account_id',
        ]);
        $this->belongsTo('Warehouses', [
            'foreignKey' => 'warehouse_office_id',
        ]);
        $this->belongsTo('Warehouses', [
            'foreignKey' => 'warehouse_facility_id',
        ]);
        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_office_id',
        ]);
        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id',
        ]);
        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
        ]);
        $this->belongsTo('OldAddresses', [
            'className' => 'LegacyAddresses',
            'foreignKey' => 'old_address_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Coms', [
            'foreignKey' => 'address_id',
        ]);
        $this->hasMany('LegacyCustomers', [
            'foreignKey' => 'address_id',
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
            ->maxLength('name', 128)
            ->allowEmptyString('name');

        $validator
            ->scalar('company')
            ->maxLength('company', 128)
            ->allowEmptyString('company');

        $validator
            ->scalar('address')
            ->maxLength('address', 128)
            ->allowEmptyString('address');

        $validator
            ->scalar('address2')
            ->maxLength('address2', 128)
            ->allowEmptyString('address2');

        $validator
            ->scalar('address3')
            ->maxLength('address3', 128)
            ->allowEmptyString('address3');

        $validator
            ->scalar('city')
            ->maxLength('city', 128)
            ->allowEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 8)
            ->allowEmptyString('state');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 20)
            ->allowEmptyString('zip');

        $validator
            ->scalar('country')
            ->maxLength('country', 20)
            ->allowEmptyString('country');

        $validator
            ->boolean('residence')
            ->allowEmptyString('residence');

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
        $rules->add($rules->existsIn(['shipping_account_id'], 'ShippingAccounts'));
        $rules->add($rules->existsIn(['warehouse_office_id'], 'Warehouses'));
        $rules->add($rules->existsIn(['warehouse_facility_id'], 'Warehouses'));
        $rules->add($rules->existsIn(['tenant_office_id'], 'Tenants'));
        $rules->add($rules->existsIn(['tenant_id'], 'Tenants'));
        $rules->add($rules->existsIn(['person_id'], 'People'));
        $rules->add($rules->existsIn(['old_address_id'], 'OldAddresses'));

        return $rules;
    }
}
