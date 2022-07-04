<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomTabTitles Model
 *
 * @property \App\Model\Table\ContentsTable&\Cake\ORM\Association\HasMany $Contents
 *
 * @method \App\Model\Entity\CustomTabTitle newEmptyEntity()
 * @method \App\Model\Entity\CustomTabTitle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CustomTabTitle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomTabTitle get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomTabTitle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CustomTabTitle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomTabTitle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomTabTitle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomTabTitle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomTabTitle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CustomTabTitle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CustomTabTitle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CustomTabTitle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CustomTabTitlesTable extends Table
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

        $this->setTable('custom_tab_titles');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Contents', [
            'foreignKey' => 'custom_tab_title_id',
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
            ->allowEmptyString('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['name'], ['allowMultipleNulls' => true]), ['errorField' => 'name']);

        return $rules;
    }
}
