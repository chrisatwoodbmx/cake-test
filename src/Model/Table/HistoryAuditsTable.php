<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HistoryAudits Model
 *
 * @property \App\Model\Table\RecordsTable&\Cake\ORM\Association\BelongsTo $Records
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsTo $Profiles
 *
 * @method \App\Model\Entity\HistoryAudit newEmptyEntity()
 * @method \App\Model\Entity\HistoryAudit newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\HistoryAudit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HistoryAudit get($primaryKey, $options = [])
 * @method \App\Model\Entity\HistoryAudit findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\HistoryAudit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HistoryAudit[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\HistoryAudit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HistoryAudit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HistoryAudit[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\HistoryAudit[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\HistoryAudit[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\HistoryAudit[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HistoryAuditsTable extends Table
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

        $this->setTable('history_audits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Records', [
            'foreignKey' => 'record_id',
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
            ->scalar('table')
            ->maxLength('table', 30)
            ->requirePresence('table', 'create')
            ->notEmptyString('table');

        $validator
            ->scalar('field')
            ->maxLength('field', 30)
            ->requirePresence('field', 'create')
            ->notEmptyString('field');

        $validator
            ->integer('record_id')
            ->requirePresence('record_id', 'create')
            ->notEmptyString('record_id');

        $validator
            ->allowEmptyString('old');

        $validator
            ->requirePresence('new', 'create')
            ->notEmptyString('new');

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
        $rules->add($rules->existsIn('record_id', 'Records'), ['errorField' => 'record_id']);
        $rules->add($rules->existsIn('profile_id', 'Profiles'), ['errorField' => 'profile_id']);

        return $rules;
    }
}
