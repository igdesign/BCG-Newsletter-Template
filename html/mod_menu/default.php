<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die; ?>
<table border="0" cellpadding="0" cellspacing="0" width="418">
  <tbody>
    <tr>
      <?php foreach ($list as $i => &$item) : ?>
      <td align="center" bgcolor="#583" >

      <?php // Render the menu item.
      	switch ($item->type) {
      		case 'separator':
      		case 'url':
      		case 'component':
      		case 'heading':
      			require JModuleHelper::getLayoutPath('mod_menu', 'default_'.$item->type);
      			break;

      		default:
      			require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
      			break;
        }
      ?>

      </td>
      <?php endforeach; ?>
    </tr>
  </tbody>
</table>