<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Supervisions Model
 *
 * @method \App\Model\Entity\Supervision newEmptyEntity()
 * @method \App\Model\Entity\Supervision newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Supervision[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Supervision get($primaryKey, $options = [])
 * @method \App\Model\Entity\Supervision findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Supervision patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Supervision[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Supervision|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supervision saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SupervisionsTable extends Table
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

        $this->setTable('supervisions');
        $this->setDisplayField('id');
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
            ->requirePresence('supervisor', 'create')
            ->notEmptyString('supervisor');

        $validator
            ->boolean('student')
            ->allowEmptyString('student');

        return $validator;
    }
}
