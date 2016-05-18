<?php $this->beginContent('application.views.layouts.base'); ?>
<div class="uk-container uk-container-center">
  <?php HView::flashMessages(); ?>
  <div class="md-card">
    <div class="uk-grid">
      <div class='uk-width-small-1-1 uk-visible-small'>
        <ul class="uk-tab uk-tab-right uk-width-medium-1-2" >
          <?php foreach ($this->menuLateral as $i) {
            echo '<li ' . ($i[0]==$this->action->id?'class="uk-active"':'') . '>';
            echo CHtml::link($i[1],$i[2],isset($i[3])?$i[3]:[]);
            echo '</li>';
          } ?>
        </ul>
        <br>
      </div>
      <div class='uk-width-medium-7-10 uk-width-small-1-1'>
          <?=$content?>
      </div>
      <div class='uk-width-medium-3-10 uk-hidden-small'>
        <ul class="uk-tab uk-tab-right uk-width-medium-1-2" >
          <?php foreach ($this->menuLateral as $i) {
            echo '<li ' . ($i[0]==$this->action->id?'class="uk-active"':'') . '>';
            echo CHtml::link($i[1],$i[2],isset($i[3])?$i[3]:[]);
            echo '</li>';
          } ?>
        </ul>
        <?php if($this->tabelaBrasileirao): ?>
          <div class="uk-hidden-small">
            <br><br>
            <h3>Tabela do brasileirão</h3>
            <?php $this->widget('application.widgets.TabelaBrasileirao.TabelaBrasileirao'); ?>
          </div>
        <?php endif;?>
      </div>
    </div>
  </div>
</div>
<?php $this->endContent(); ?>
