<?php

/**
 * PlugindvbNewsletterSubscriber form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PlugindvbNewsletterSubscriberForm extends BasedvbNewsletterSubscriberForm
{
    public function setupInheritance()
    {
        parent::setupInheritance();

        $this->offsetUnset('created_at');
        $this->offsetUnset('updated_at');
    }
}
