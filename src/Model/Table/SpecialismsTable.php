<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Specialisms Model
 *
 * @property \App\Model\Table\MappingSpecialismsTable&\Cake\ORM\Association\HasMany $MappingSpecialisms
 *
 * @method \App\Model\Entity\Specialism newEmptyEntity()
 * @method \App\Model\Entity\Specialism newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Specialism[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Specialism get($primaryKey, $options = [])
 * @method \App\Model\Entity\Specialism findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Specialism patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Specialism[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Specialism|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Specialism saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Specialism[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Specialism[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Specialism[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Specialism[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SpecialismsTable extends Table
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

        $this->setTable('specialisms');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('MappingSpecialisms', [
            'foreignKey' => 'specialism_id',
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
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->boolean('display')
            ->allowEmptyString('display');

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
        $rules->add($rules->isUnique(['name', 'display'], ['allowMultipleNulls' => true]), ['errorField' => 'name']);

        return $rules;
    }
}
