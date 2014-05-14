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
              <td align="center"
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
                          class="mcnFollowTextContent"
                          width="100%"
                          style="padding-left: 0;
                                 text-align: center;
                                 mso-table-lspace: 0pt;
                                 mso-table-rspace: 0pt;
                                 -ms-text-size-adjust: 100%;">
                        <a <?= $href ?>
                           <?= $target ?>
                           <?= $options ?>
                           style="font-family:  Arial;
                                  font-size:  14px;
                                  text-decoration:  none;
                                  font-weight:  normal;
                                  line-height:  30px;
                                  text-align:  center;
                                  display: block;
                                  width: 100%;"><?= $text ?></a>
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
<td align="center" valign="top">
<![endif]-->

