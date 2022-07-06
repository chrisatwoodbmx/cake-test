<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingSpecialism $mappingSpecialism
 * @var string[]|\Cake\Collection\CollectionInterface $specialisms
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mappingSpecialism->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpecialism->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mapping Specialisms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingSpecialisms form content">
            <?= $this->Form->create($mappingSpecialism) ?>
            <fieldset>
                <legend><?= __('Edit Mapping Specialism') ?></legend>
                <?php
                    echo $this->Form->control('specialism_id', ['options' => $specialisms]);
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
