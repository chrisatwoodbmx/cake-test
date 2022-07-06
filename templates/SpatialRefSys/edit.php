<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $spatialRefSy
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $spatialRefSy->srid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $spatialRefSy->srid), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Spatial Ref Sys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="spatialRefSys form content">
            <?= $this->Form->create($spatialRefSy) ?>
            <fieldset>
                <legend><?= __('Edit Spatial Ref Sy') ?></legend>
                <?php
                    echo $this->Form->control('auth_name');
                    echo $this->Form->control('auth_srid');
                    echo $this->Form->control('srtext');
                    echo $this->Form->control('proj4text');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
