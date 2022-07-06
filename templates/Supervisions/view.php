<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supervision $supervision
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Supervision'), ['action' => 'edit', $supervision->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Supervision'), ['action' => 'delete', $supervision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supervision->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Supervisions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Supervision'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="supervisions view content">
            <h3><?= h($supervision->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Supervisor') ?></th>
                    <td><?= h($supervision->supervisor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($supervision->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $supervision->student ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
