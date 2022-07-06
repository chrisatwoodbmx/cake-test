<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pronoun $pronoun
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pronouns'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pronouns form content">
            <?= $this->Form->create($pronoun) ?>
            <fieldset>
                <legend><?= __('Add Pronoun') ?></legend>
                <?php
                    echo $this->Form->control('pronoun');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
