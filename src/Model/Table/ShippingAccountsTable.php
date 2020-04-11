<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShippingAccounts Model
 *
 * @property \App\Model\Table\TenantsTable&\Cake\ORM\Association\BelongsTo $Tenants
 * @property \App\Model\Table\AddressesTable&\Cake\ORM\Association\HasMany $Addresses
 *
 * @method \App\Model\Entity\ShippingAccount newEmptyEntity()
 * @method \App\Model\Entity\ShippingAccount newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ShippingAccount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ShippingAccount get($primaryKey, $options = [])
 * @method \App\Model\Entity\ShippingAccount findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ShippingAccount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ShippingAccount[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ShippingAccount|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ShippingAccount saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ShippingAccount[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ShippingAccount[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ShippingAccount[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ShippingAccount[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ShippingAccountsTable extends Table
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

        $this->setTable('shipping_accounts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id',
        ]);
        $this->hasMany('Addresses', [
            'foreignKey' => 'shipping_account_id',
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
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('shipper')
            ->maxLength('shipper', 15)
            ->requirePresence('shipper', 'create')
            ->notEmptyString('shipper');

        $validator
            ->scalar('account_number')
            ->maxLength('account_number', 20)
            ->requirePresence('account_number', 'create')
            ->notEmptyString('account_number');

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
        $rules->add($rules->existsIn(['tenant_id'], 'Tenants'));

        return $rules;
    }
}
