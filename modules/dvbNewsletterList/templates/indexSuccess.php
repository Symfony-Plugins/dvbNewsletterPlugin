<h1><?php echo __('Newsletters', array(), 'dvb_newsletter');?></h1>
<p><?php echo __('You can subscribe to these lists:', array(), 'dvb_newsletter');?></p>
<ul>
  <?php foreach($lists as $currentList):?>
    <li><a href="<?php echo url_for('dvb_newsletter_list_show', $currentList)?>"><?php echo $currentList?></a></li>
  <?php endforeach;?>
</ul>