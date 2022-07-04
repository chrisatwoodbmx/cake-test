<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobTitles Model
 *
 * @property \App\Model\Table\MappingJobTitlesTable&\Cake\ORM\Association\HasMany $MappingJobTitles
 *
 * @method \App\Model\Entity\JobTitle newEmptyEntity()
 * @method \App\Model\Entity\JobTitle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\JobTitle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JobTitle get($primaryKey, $options = [])
 * @method \App\Model\Entity\JobTitle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\JobTitle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JobTitle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\JobTitle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobTitle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JobTitle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JobTitle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\JobTitle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\JobTitle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class JobTitlesTable extends Table
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

        $this->setTable('job_titles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('MappingJobTitles', [
            'foreignKey' => 'job_title_id',
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
            ->requirePresence('job_title', 'create')
            ->notEmptyString('job_title')
            ->add('job_title', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['job_title']), ['errorField' => 'job_title']);

        return $rules;
    }
}
