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
            <?= $this->Html->link(__('Edit Spatial Ref Sy'), ['action' => 'edit', $spatialRefSy->srid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Spatial Ref Sy'), ['action' => 'delete', $spatialRefSy->srid], ['confirm' => __('Are you sure you want to delete # {0}?', $spatialRefSy->srid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Spatial Ref Sys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Spatial Ref Sy'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="spatialRefSys view content">
            <h3><?= h($spatialRefSy->srid) ?></h3>
            <table>
                <tr>
                    <th><?= __('Auth Name') ?></th>
                    <td><?= h($spatialRefSy->auth_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Srtext') ?></th>
                    <td><?= h($spatialRefSy->srtext) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proj4text') ?></th>
                    <td><?= h($spatialRefSy->proj4text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Srid') ?></th>
                    <td><?= $this->Number->format($spatialRefSy->srid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Auth Srid') ?></th>
                    <td><?= $spatialRefSy->auth_srid === null ? '' : $this->Number->format($spatialRefSy->auth_srid) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
