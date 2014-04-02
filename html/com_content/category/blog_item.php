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

include 'templates/newsletter/template_includes.php' ;

$this->item->introtext = str_replace('<a href="/', '<a href="' . str_replace(JURI::root(true), '', JURI::root()), $this->item->introtext);
$this->item->introtext = str_replace('<a href="index.php?', '<a href="' . str_replace(JURI::root(true), '', JURI::root()).'index.php?', $this->item->introtext);

?>

<!-- Leading -->
<table width="418" class="mcnTextContentContainer" cellpadding="0" cellspacing="0" border="0">
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
        <?php if (isset($img_src)) : ?>
           <img <?= $cssImg ?> src="<?= 'http://britishcolumbiagolf.org/'.htmlspecialchars($img_src); ?>" alt="<?= htmlspecialchars($img_alt); ?>" width="128"/>
        <?php endif; ?>

      </td>
      <td width="5" rowspan="2"></td>
    </tr>
    <tr>
      <td align="left">
        <?= $cssFontTitle ?><?= htmlentities($this->item->title); ?><?= $cssFontTitleEnd ?>
        <?= $cssFont ?><?= strip_tags($this->item->introtext, '<a>'); ?><?= $cssFontEnd ?>

      </td>
    </tr>
  </tbody>
</table> <!-- /leading -->
<table><tr><td height="10"></td></tr></table>
