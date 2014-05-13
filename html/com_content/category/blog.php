<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$templateparams = $app->getTemplate(true)->params;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
JHtml::_('behavior.caption');

$cparams = JComponentHelper::getParams('com_media');

// If the page class is defined, add to class as suffix.
// It will be a separate class if the user starts it with a space
?>



<?php // Leading
if (!empty($this->lead_items)) {
  foreach($this->lead_items as &$item) {
    $this->item = &$item;
    echo $this->loadTemplate('leading');
  }
}
?>

<?php // Intro
if (!empty($this->intro_items)) {
  foreach($this->intro_items as $key => &$item) {
    $this->item = &$item;
    echo $this->loadTemplate('item');
  }
}
?>
