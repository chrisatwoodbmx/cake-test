<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingSpecialism $mappingSpecialism
 * @var \Cake\Collection\CollectionInterface|string[] $specialisms
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Mapping Specialisms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingSpecialisms form content">
            <?= $this->Form->create($mappingSpecialism) ?>
            <fieldset>
                <legend><?= __('Add Mapping Specialism') ?></legend>
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
