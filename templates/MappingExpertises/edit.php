<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingExpertise $mappingExpertise
 * @var string[]|\Cake\Collection\CollectionInterface $expertises
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mappingExpertise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mappingExpertise->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mapping Expertises'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingExpertises form content">
            <?= $this->Form->create($mappingExpertise) ?>
            <fieldset>
                <legend><?= __('Edit Mapping Expertise') ?></legend>
                <?php
                    echo $this->Form->control('expertise_id', ['options' => $expertises]);
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
