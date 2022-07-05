<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MappingActivitiesTypes Model
 *
 * @method \App\Model\Entity\MappingActivitiesType newEmptyEntity()
 * @method \App\Model\Entity\MappingActivitiesType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MappingActivitiesType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MappingActivitiesType get($primaryKey, $options = [])
 * @method \App\Model\Entity\MappingActivitiesType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MappingActivitiesType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MappingActivitiesType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MappingActivitiesType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingActivitiesType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingActivitiesType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingActivitiesType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingActivitiesType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingActivitiesType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MappingActivitiesTypesTable extends Table
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

        $this->setTable('mapping_activities_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->scalar('name')
            ->maxLength('name', 20)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
