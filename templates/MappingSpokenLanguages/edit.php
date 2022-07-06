<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MappingSpokenLanguage $mappingSpokenLanguage
 * @var string[]|\Cake\Collection\CollectionInterface $spokenLanguages
 * @var string[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mappingSpokenLanguage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mappingSpokenLanguage->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mapping Spoken Languages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mappingSpokenLanguages form content">
            <?= $this->Form->create($mappingSpokenLanguage) ?>
            <fieldset>
                <legend><?= __('Edit Mapping Spoken Language') ?></legend>
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
