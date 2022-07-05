<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MappingSpecialisms Model
 *
 * @property \App\Model\Table\SpecialismsTable&\Cake\ORM\Association\BelongsTo $Specialisms
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsTo $Profiles
 *
 * @method \App\Model\Entity\MappingSpecialism newEmptyEntity()
 * @method \App\Model\Entity\MappingSpecialism newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MappingSpecialism[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MappingSpecialism get($primaryKey, $options = [])
 * @method \App\Model\Entity\MappingSpecialism findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MappingSpecialism patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MappingSpecialism[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MappingSpecialism|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingSpecialism saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingSpecialism[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingSpecialism[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingSpecialism[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingSpecialism[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MappingSpecialismsTable extends Table
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

        $this->setTable('mapping_specialisms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Specialisms', [
            'foreignKey' => 'specialism_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Profiles', [
            'foreignKey' => 'profile_id',
            'joinType' => 'INNER',
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
            ->integer('specialism_id')
            ->requirePresence('specialism_id', 'create')
            ->notEmptyString('specialism_id');

        $validator
            ->integer('profile_id')
            ->requirePresence('profile_id', 'create')
            ->notEmptyFile('profile_id');

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
        $rules->add($rules->existsIn('specialism_id', 'Specialisms'), ['errorField' => 'specialism_id']);
        $rules->add($rules->existsIn('profile_id', 'Profiles'), ['errorField' => 'profile_id']);

        return $rules;
    }
}
