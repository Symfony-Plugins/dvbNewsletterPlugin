<h2><?php echo __('List %%list%%', array('%%list%%' => $list), 'dvb_newsletter')?></h2>
<p><?php echo $list->getDescription()?></p>
<hr />

<a href="<?php echo url_for('dvb_newsletter_list') ?>"><?php echo __('See other lists', array(), 'dvb_newsletter')?></a>
