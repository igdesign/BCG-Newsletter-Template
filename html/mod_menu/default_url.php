<?php defined('_JEXEC') or die; ?>

<?php
$href = null;
$text = null;
$target = null;
$title = null;
$options = null;
$onclick = null;

$linktype = $item->title;
$flink = $item->flink;
$flink = JFilterOutput::ampReplace(htmlspecialchars($flink));

$href = 'href="'.$flink.'"';
$text = $item->title;

switch ($item->browserNav) :
	default:
	case 0:
		break;

	case 1:
	  $target = 'target="_blank"';
		break;

	case 2:
		$options = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,'.$params->get('window_open');
		$onclick = 'onclick="window.open(this.href,\'targetWindow\',\''. $options .'\');return false;"';
		break;
endswitch;
?>
<!-- ITEM -->
<table align="left"
       border="0"
       cellpadding="0"
       cellspacing="0"
       width="25%">
  <tbody>
    <tr>
      <td valign="top"
          style="padding-right: 0;
                 padding-bottom: 0;"
          class="mcnFollowContentItemContainer">
        <table border="0"
               cellpadding="0"
               cellspacing="0"
               width="100%"
               class="mcnFollowContentItem">
          <tbody>
            <tr>
              <td align="left"
                  valign="middle"
                  style="padding-top: 0;
                         padding-right: 0;
                         padding-bottom: 0;
                         padding-left: 0;">
                <table align="left"
                       border="0"
                       cellpadding="0"
                       cellspacing="0"
                       width="100%">
                  <tbody>
                    <tr>
                      <td align="center"
                          valign="middle"
                          height="36"
                          class="mcnFollowTextContent"
                          style="padding-left: 0;
                                 text-align: center;">
                        <a <?= $href ?>
                           <?= $target ?>
                           <?= $options ?>
                           style="font-family: Arial;
                                   font-size: 14px;
                                   text-decoration: none;
                                   color: #ffffff;
                                   font-weight: normal;
                                   text-align: center;
                                   display: block;"><?= $text ?></a>
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
<!--[if gte mso 6]>
</td>
<td align="left" valign="top">
<![endif]-->
