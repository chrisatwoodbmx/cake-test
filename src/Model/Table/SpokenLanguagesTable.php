<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SpokenLanguages Model
 *
 * @property \App\Model\Table\MappingSpokenLanguagesTable&\Cake\ORM\Association\HasMany $MappingSpokenLanguages
 *
 * @method \App\Model\Entity\SpokenLanguage newEmptyEntity()
 * @method \App\Model\Entity\SpokenLanguage newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SpokenLanguage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SpokenLanguage get($primaryKey, $options = [])
 * @method \App\Model\Entity\SpokenLanguage findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SpokenLanguage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SpokenLanguage[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SpokenLanguage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SpokenLanguage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SpokenLanguage[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SpokenLanguage[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SpokenLanguage[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SpokenLanguage[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SpokenLanguagesTable extends Table
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

        $this->setTable('spoken_languages');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('MappingSpokenLanguages', [
            'foreignKey' => 'spoken_language_id',
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

        return $validator;
    }
}
