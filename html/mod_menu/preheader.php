<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die; ?>

<table border="0"
       cellpadding="0"
       cellspacing="0"
       width="100%"
       class="mcnFollowBlock">

  <tbody class="mcnFollowBlockOuter">
    <tr>
      <td align="center"
          valign="top"
          style="padding: 0"
          class="mcnFollowBlockInner">

        <table border="0"
               cellpadding="0"
               cellspacing="0"
               width="100%"
               class="mcnFollowContentContainer">
          <tbody>
            <tr>
              <td align="center"
                  style="padding-left: 0;
                         padding-right: 0;">
                <table border="0"
                       cellpadding="0"
                       cellspacing="0"
                       width="100%"
                       class="mcnFollowContent">
                  <tbody>
                    <tr>
                      <td align="center"
                          valign="top"
                          style="padding-top: 0;
                                 padding-right: 0;
                                 padding-left: 0;">
                        <table border="0"
                               cellpadding="0"
                               cellspacing="0"
                               width="100%">
                          <tbody>
                            <tr>
                              <td valign="top">

<?php foreach ($list as $i => &$item) {
        switch ($item->type) {
        	case 'separator':
        	case 'url':
        	case 'component':
        	case 'heading':
        		require JModuleHelper::getLayoutPath('mod_menu', 'preheader_'.$item->type);
        		break;

        	default:
        		require JModuleHelper::getLayoutPath('mod_menu', 'preheader_url');
        		break;
          }
        }
?>

                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>