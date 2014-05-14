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


<!-- BEGIN CAPTION ITEM -->
<table border="0"
       cellpadding="0"
       cellspacing="0"
       width="100%"
       class="mcnCaptionBlock">
  <tbody class="mcnCaptionBlockOuter">
    <tr>
      <td class="mcnCaptionBlockInner"
          valign="top"
          style="padding: 0;">
        <table align="left"
               border="0"
               cellpadding="0"
               cellspacing="0"
               class="mcnCaptionBottomContent"
               width="false">
          <tbody>
            <tr>
              <td class="mcnCaptionBottomImageContent"
                  align="left"
                  valign="top"
                  style="padding: 0;">
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
                  <img alt=""
                     src="<?= 'http://britishcolumbiagolf.org/'.htmlspecialchars($img_src); ?>" width="418"  alt="<?= htmlspecialchars($img_alt); ?>"
                     width="418"
                     style="max-width: 853px;"
                     class="mcnImage">
                <?php endif; ?>

              </td>
            </tr>
            <tr>
              <td class="mcnTextContent"
                  valign="top"
                  style="padding: 0;"
                  width="418">

                <h1 style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 24px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -1px;text-align: left;color: #222222 !important;"><?= $this->item->title; ?></h1>
                <div style="margin: 10px 0 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #222222;font-family: Helvetica;font-size: 14px;line-height: 150%;text-align: left;"><?= strip_tags($this->item->introtext, '<a><br><p>'); ?></div>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<!-- // END CAPTION ITEM -->

<br />
