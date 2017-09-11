<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Track Model
 *
 * @method \App\Model\Entity\Track get($primaryKey, $options = [])
 * @method \App\Model\Entity\Track newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Track[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Track|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Track patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Track[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Track findOrCreate($search, callable $callback = null, $options = [])
 */
class TrackTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('track');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('venuename', 'create')
            ->notEmpty('venuename');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('latitude', 'create')
            ->notEmpty('latitude');

        $validator
            ->requirePresence('longitude', 'create')
            ->notEmpty('longitude');

        $validator
            ->requirePresence('licenseno', 'create')
            ->notEmpty('licenseno');

        return $validator;
    }
}
