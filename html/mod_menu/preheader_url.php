<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* include 'templates/newsletter/template_includes.php' ; */

// Note. It is important to remove spaces between elements.
$class = $item->anchor_css ? 'class="'.$item->anchor_css.' mc-template-link" ' : 'class="'.$class_sfx.'__link  mc-template-link"';
$title = $item->anchor_title ? 'title="'.$item->anchor_title.'" ' : '';
if ($item->menu_image)
	{
		$item->params->get('menu_text', 1) ?
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" /><span class="image-title">'.$item->title.'</span> ' :
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" />';
}
else { $linktype = $item->title;
}
$flink = $item->flink;
$flink = JFilterOutput::ampReplace(htmlspecialchars($flink));


$style = 'style="font-family: Arial;font-size: 12px; text-decoration-line: none; font-weight: normal; line-height: 100%; text-align: center; word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;color: #0054a4;"';
?>



<td width="25%" align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnShareContentItemContainer">

<?php
switch ($item->browserNav) :
	default:
	case 0:
?><a <?= $class; ?> <?= $style; ?> href="<?= $flink; ?>" <?= $title; ?> ><?= $linktype; ?></a><?php
		break;
	case 1:
		// _blank
?><a <?= $class; ?> <?= $style; ?> href="<?= $flink; ?>" target="_blank" <?= $title; ?> ><?= $linktype; ?></a><?php
		break;
	case 2:
		// window.open
		$options = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,'.$params->get('window_open');
			?><a <?= $class; ?> <?= $style; ?> href="<?= $flink; ?>" onclick="window.open(this.href,'targetWindow','<?= $options;?>');return false;" <?= $title; ?> ><?= $linktype; ?></a><?php
		break;
endswitch;
?>

 </td>