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

if (isset($images->image_intro) and !empty($images->image_intro)) {
  $img_src = $images->image_intro;
  $img_alt = $images->image_intro_alt;
}
else if (isset($images->image_fulltext) and !empty($images->image_fulltext)) {
  $img_src = $images->image_fulltext;
  $img_alt = $images->image_fulltext_alt;
}

?>


<!-- BEGIN LEFT CAPTION ITEM // -->
<table border="0"
       cellpadding="0"
       cellspacing="0"
       width="100%"
       class="mcnCaptionBlock">
  <tbody class="mcnCaptionBlockOuter">
    <tr>
      <td class="mcnCaptionBlockInner"
          valign="top"
          style="padding: 0;
                 padding-right: 0;">
        <table border="0"
               cellpadding="0"
               cellspacing="0"
               class="mcnCaptionRightContentOuter"
               width="100%">
          <tbody>
            <tr>
              <td valign="top"
                  class="mcnCaptionRightContentInner"
                  style="padding: 0 0 ;">
                <table align="left"
                       border="0"
                       cellpadding="0"
                       cellspacing="0"
                       class="mcnCaptionRightImageContentContainer">
                  <tbody>
                    <tr>
                      <td class="mcnCaptionRightImageContent"
                          valign="top">

                        <?php if (isset($img_src)) : ?>
                        <img alt="<?= htmlspecialchars($img_alt); ?>"
                             src="<?= 'http://britishcolumbiagolf.org/'.htmlspecialchars($img_src); ?>"
                             width="128"
                             height="72"
                             style="max-width: 418px !important;"
                             class="mcnImage">
                        <?php endif; ?>

                      </td>
                    </tr>
                  </tbody>
                </table>
                <table class="mcnCaptionRightTextContentContainer"
                       align="right"
                       border="0"
                       cellpadding="0"
                       cellspacing="0"
                       width="290">
                  <tbody>
                    <tr>
                      <td valign="top"
                          class="mcnTextContent"
                          style="text-align: left;
                                 padding-left: 9px;">


                        <h4 style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 14px;font-style: normal;font-weight: bold; letter-spacing: 0px;text-align: left;color: #222222 !important;"><?= htmlentities($this->item->title); ?><?= $cssFontTitleEnd ?></h4>
                        <div style="margin: 10px 0 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #222222;font-family: Helvetica;font-size: 14px;line-height: 150%;text-align: left;"><?= strip_tags($this->item->introtext, '<a>'); ?></div>
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
<!-- // END LEFT CAPTION ITEM -->

<br />