<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Feed'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="feeds index large-9 medium-8 columns content">
    <h3><?= __('Feeds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('thumbnail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feeds as $feed): ?>
            <tr>
                <td><?= $this->Number->format($feed->id) ?></td>
                <td><?= h($feed->title) ?></td>
                <td><?= h($feed->thumbnail) ?></td>
                <td><?= h($feed->time_created) ?></td>
                <td><?= h($feed->alias) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feed->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feed->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feed->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feed->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
