<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LegacyCatalogsUsers Model
 *
 * @property \App\Model\Table\CatalogsTable&\Cake\ORM\Association\BelongsTo $Catalogs
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\LegacyCatalogsUser newEmptyEntity()
 * @method \App\Model\Entity\LegacyCatalogsUser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyCatalogsUser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LegacyCatalogsUsersTable extends Table
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

        $this->setTable('legacy_catalogs_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Catalogs', [
            'foreignKey' => 'catalog_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
        $rules->add($rules->existsIn(['catalog_id'], 'Catalogs'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
