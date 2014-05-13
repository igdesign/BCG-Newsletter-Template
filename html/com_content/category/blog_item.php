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

<table width="418"
       class="mcnTextContentContainer"
       cellpadding="0"
       cellspacing="0"
       border="0"
       valign="top"
       style="border-collapse: collapse;
              mso-table-lspace: 0pt;
              mso-table-rspace: 0pt;
              -ms-text-size-adjust: 100%;
              -webkit-text-size-adjust: 100%;">
    <tr>
      <td align="left"
          valign="top">


          <table width="128"
                 cellpadding="0"
                 cellspacing="0"
                 border="0"
                 class="mcnTextContentContainer"
                 align="left"
                 valign="top">
            <tr>
              <td align="left"
                  valign="top">

                <?php if (isset($img_src)) : ?>
                <img src="<?= 'http://britishcolumbiagolf.org/'.htmlspecialchars($img_src); ?>"
                     width="128"
                     height="72"
                     alt="<?= htmlspecialchars($img_alt); ?>"
                     align="center"
                     alt=""
                     class="mcnImage"
                     style="max-width: 418px !important;
                            height: auto !important;
                            display: inline !important;
                            vertical-align: bottom;
                            border: 0;
                            outline: none;
                            text-decoration: none;
                            -ms-interpolation-mode: bicubic;" />
                <?php endif; ?>


              </td>
            </tr>
          </table>


          <table width="280"
                 cellpadding="0"
                 cellspacing="0"
                 border="0"
                 class="mcnTextContentContainer"
                 align="right">
            <tr>
              <td valign="top" align="left">
                <?= $cssFontTitle ?><?= htmlentities($this->item->title); ?><?= $cssFontTitleEnd ?><br />
                <?= $cssFont ?><?= strip_tags($this->item->introtext, '<a>'); ?><?= $cssFontEnd ?>

              </td>
            </tr>
          </table>


      </td>
    </tr>
</table>
<table width="10" height="10" valign="top" align="left">
    <tr>
      <td align="left" valign="top" >
      </td>
    </tr>
  </table>

