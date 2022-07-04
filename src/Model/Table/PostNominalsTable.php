<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PostNominals Model
 *
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\HasMany $Profiles
 *
 * @method \App\Model\Entity\PostNominal newEmptyEntity()
 * @method \App\Model\Entity\PostNominal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PostNominal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PostNominal get($primaryKey, $options = [])
 * @method \App\Model\Entity\PostNominal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PostNominal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PostNominal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PostNominal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PostNominal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PostNominal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PostNominal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PostNominal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PostNominal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PostNominalsTable extends Table
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

        $this->setTable('post_nominals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Profiles', [
            'foreignKey' => 'post_nominal_id',
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
            ->scalar('post_nominal')
            ->maxLength('post_nominal', 150)
            ->requirePresence('post_nominal', 'create')
            ->notEmptyString('post_nominal');

        return $validator;
    }
}
