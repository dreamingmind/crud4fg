<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LegacyCustomers Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AddressesTable&\Cake\ORM\Association\BelongsTo $Addresses
 * @property \App\Model\Table\ImagesTable&\Cake\ORM\Association\BelongsTo $Images
 *
 * @method \App\Model\Entity\LegacyCustomer newEmptyEntity()
 * @method \App\Model\Entity\LegacyCustomer newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCustomer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCustomer get($primaryKey, $options = [])
 * @method \App\Model\Entity\LegacyCustomer findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LegacyCustomer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCustomer[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCustomer|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyCustomer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyCustomer[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyCustomer[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyCustomer[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyCustomer[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LegacyCustomersTable extends Table
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

        $this->setTable('legacy_customers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id',
        ]);
        $this->belongsTo('Images', [
            'foreignKey' => 'image_id',
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
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('customer_code')
            ->maxLength('customer_code', 24)
            ->allowEmptyString('customer_code');

        $validator
            ->scalar('order_contact')
            ->maxLength('order_contact', 50)
            ->allowEmptyString('order_contact');

        $validator
            ->scalar('billing_contact')
            ->maxLength('billing_contact', 50)
            ->allowEmptyString('billing_contact');

        $validator
            ->boolean('allow_backorder')
            ->allowEmptyString('allow_backorder');

        $validator
            ->boolean('allow_direct_pay')
            ->allowEmptyString('allow_direct_pay');

        $validator
            ->integer('release_hold')
            ->allowEmptyString('release_hold');

        $validator
            ->boolean('taxable')
            ->allowEmptyString('taxable');

        $validator
            ->integer('rent_qty')
            ->allowEmptyString('rent_qty');

        $validator
            ->scalar('rent_unit')
            ->maxLength('rent_unit', 50)
            ->allowEmptyString('rent_unit');

        $validator
            ->decimal('rent_price')
            ->allowEmptyString('rent_price');

        $validator
            ->decimal('item_pull_charge')
            ->allowEmptyString('item_pull_charge');

        $validator
            ->decimal('order_pull_charge')
            ->allowEmptyString('order_pull_charge');

        $validator
            ->scalar('token')
            ->maxLength('token', 40)
            ->allowEmptyString('token');

        $validator
            ->scalar('customer_type')
            ->maxLength('customer_type', 50)
            ->allowEmptyString('customer_type');

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
        $rules->add($rules->existsIn(['address_id'], 'Addresses'));
        $rules->add($rules->existsIn(['image_id'], 'Images'));

        return $rules;
    }
}
