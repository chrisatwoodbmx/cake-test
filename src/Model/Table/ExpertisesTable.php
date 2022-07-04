<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Expertises Model
 *
 * @property \App\Model\Table\MappingExpertisesTable&\Cake\ORM\Association\HasMany $MappingExpertises
 *
 * @method \App\Model\Entity\Expertise newEmptyEntity()
 * @method \App\Model\Entity\Expertise newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Expertise[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Expertise get($primaryKey, $options = [])
 * @method \App\Model\Entity\Expertise findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Expertise patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Expertise[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Expertise|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expertise saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Expertise[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expertise[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expertise[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Expertise[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ExpertisesTable extends Table
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

        $this->setTable('expertises');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('MappingExpertises', [
            'foreignKey' => 'expertise_id',
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
            ->notEmptyString('display');

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
        $rules->add($rules->isUnique(['name', 'display']), ['errorField' => 'name']);

        return $rules;
    }
}
