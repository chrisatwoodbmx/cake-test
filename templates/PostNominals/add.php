<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PostNominal $postNominal
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Post Nominals'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="postNominals form content">
            <?= $this->Form->create($postNominal) ?>
            <fieldset>
                <legend><?= __('Add Post Nominal') ?></legend>
                <?php
                    echo $this->Form->control('post_nominal');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
