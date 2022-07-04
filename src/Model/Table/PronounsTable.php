<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pronouns Model
 *
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\HasMany $Profiles
 *
 * @method \App\Model\Entity\Pronoun newEmptyEntity()
 * @method \App\Model\Entity\Pronoun newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pronoun[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pronoun get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pronoun findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pronoun patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pronoun[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pronoun|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pronoun saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pronoun[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pronoun[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pronoun[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pronoun[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PronounsTable extends Table
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

        $this->setTable('pronouns');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Profiles', [
            'foreignKey' => 'pronoun_id',
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
            ->scalar('pronoun')
            ->maxLength('pronoun', 25)
            ->requirePresence('pronoun', 'create')
            ->notEmptyString('pronoun');

        return $validator;
    }
}
