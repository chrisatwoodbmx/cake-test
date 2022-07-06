<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingSpokenLanguage $mappingSpokenLanguage
 * @var \Cake\Collection\CollectionInterface|string[] $spokenLanguages
 * @var \Cake\Collection\CollectionInterface|string[] $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Mapping Spoken Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingSpokenLanguages form content">
            <?= $this->Form->create($mappingSpokenLanguage) ?>
            <fieldset>
                <legend><?= __('Add Mapping Spoken Language') ?></legend>
                <?php
                    echo $this->Form->control('spoken_language_id', ['options' => $spokenLanguages]);
                    echo $this->Form->control('profile_id', ['options' => $profiles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
