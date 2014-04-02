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
<table  width="418" class="leading  mcnTextContentContainer" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tr>
      <td valign="top" width="418" class="mcnTextContent" style="padding-top: 5px;padding-bottom: 5px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #222222;font-family: Helvetica;font-size: 14px;line-height: 150%;text-align: left;">
        <?php
        if (isset($images->image_intro) and !empty($images->image_intro)) {
          $img_src = $images->image_intro;
          $img_alt = $images->image_intro_alt;
        }
        else if (isset($images->image_fulltext) and !empty($images->image_fulltext)) {
          $img_src = $images->image_fulltext;
          $img_alt = $images->image_fulltext_alt;
        }

        if (isset($img_src)) : ?>
          <img src="<?= 'http://britishcolumbiagolf.org/'.htmlspecialchars($img_src); ?>" width="418"  alt="<?= htmlspecialchars($img_alt); ?>" align="center" alt="" style="max-width: 418px;display: inline !important;vertical-align: bottom;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" class="mcnImage"/>
        <?php endif; ?>

      </td>
    </tr>
    <tr>
      <td width="418" class="mcnTextContent" style="padding-top: 5px;padding-bottom: 10px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #222222;font-family: Helvetica;font-size: 14px;line-height: 150%;text-align: left;">
        <h1 style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 24px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -1px;text-align: left;color: #222222 !important;"><?= $this->item->title; ?></h1>
        <div style="margin: 10px 0 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #222222;font-family: Helvetica;font-size: 14px;line-height: 150%;text-align: left;"><?= strip_tags($this->item->introtext, '<a><br><p>'); ?></div>
      </td>
    </tr>
</table> <!-- /leading -->

