<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

$params =& $this->item->params;
$images = json_decode($this->item->images);
$app = JFactory::getApplication();
$canEdit = $this->item->params->get('access-edit');

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
?>

<!-- Leading -->
<table class="leading" width="418" cellpadding="0" cellspacing="1" border="0">
  <tbody>
    <tr>
      <td rowspan="2" valign="top">
        <?php
        if (isset($images->image_intro) and !empty($images->image_intro)) {
          $img_src = $images->image_intro;
          $img_alt = $images->image_intro_alt;
        }
        else if (isset($images->image_fulltext) and !empty($images->image_fulltext)) {
          $img_src = $images->image_fulltext;
          $img_alt = $images->image_fulltext_alt;
        }
        ?>
        <img src="<?= htmlspecialchars($img_src); ?>" alt="<?= htmlspecialchars($img_alt); ?>" width="128"/>
      </td>
      <td rowspan="2" width="10"></td>
      <th align="left">
        <?= $this->item->title; ?>
      </th>
      <td rowspan="2" width="10"></td>
    </tr>
    <tr>
      <td><?= $this->item->introtext; ?></td>
    </tr>
  </tbody>
</table> <!-- /leading -->