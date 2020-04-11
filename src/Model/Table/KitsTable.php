<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kits Model
 *
 * @property \App\Model\Table\KitsTable&\Cake\ORM\Association\BelongsTo $Kits
 * @property \App\Model\Table\SkusTable&\Cake\ORM\Association\BelongsTo $Skus
 * @property \App\Model\Table\KitsTable&\Cake\ORM\Association\HasMany $Kits
 *
 * @method \App\Model\Entity\Kit newEmptyEntity()
 * @method \App\Model\Entity\Kit newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Kit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kit get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kit findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Kit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kit[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kit[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kit[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kit[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Kit[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KitsTable extends Table
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

        $this->setTable('kits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Kits', [
            'foreignKey' => 'kit_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Skus', [
            'foreignKey' => 'component_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Kits', [
            'foreignKey' => 'kit_id',
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
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

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
        $rules->add($rules->existsIn(['kit_id'], 'Kits'));
        $rules->add($rules->existsIn(['component_id'], 'Skus'));

        return $rules;
    }
}
