<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingTeam $mappingTeam
 * @var string[]|\Cake\Collection\CollectionInterface $teams
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mappingTeam->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mappingTeam->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mapping Teams'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingTeams form content">
            <?= $this->Form->create($mappingTeam) ?>
            <fieldset>
                <legend><?= __('Edit Mapping Team') ?></legend>
                <?php
                    echo $this->Form->control('team_id', ['options' => $teams]);
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
