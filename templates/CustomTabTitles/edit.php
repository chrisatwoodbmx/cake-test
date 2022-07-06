<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CustomTabTitle $customTabTitle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customTabTitle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customTabTitle->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Custom Tab Titles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customTabTitles form content">
            <?= $this->Form->create($customTabTitle) ?>
            <fieldset>
                <legend><?= __('Edit Custom Tab Title') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
