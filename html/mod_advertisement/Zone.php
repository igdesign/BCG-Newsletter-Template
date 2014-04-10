<?php // no direct acces
defined( '_JEXEC' ) or die( 'Restricted access');




$serverURL = $params->get('serverURL', '');
$serverURL = preg_replace('#^https?://#', '', rtrim($serverURL,'/'));

$deliveryPath = $params->get('deliveryPath', 'www/delivery');
$deliveryPath = trim($deliveryPath,'/');

$urlOptions = null;

$siteID = $params->get('siteID', 0);
if ($siteID) {
  $siteID = intval($siteID);
  $urlOptions['siteID'] = 'id='.$siteID;
}

$blockRepeatBanners = $params->get('blockRepeat', 0);
if ($blockRepeatBanners) {
  $blockRepeatBanners = intval($blockRepeatBanners);
  $urlOptions['blockRepeatBanners'] = 'block='.$blockRepeatBanners;
}



$blockCampaignRepeat = $params->get('blockCampaignRepeat', 0);
if ($blockCampaignRepeat) {
  $blockCampaignRepeat = intval($blockCampaignRepeat);
  $urlOptions['blockCampaign'] = 'blockCampaign='.$blockCampaignRepeat;
}

$target = $params->get('target', '_blank');
if ($target) {
  $urlOptions['target'] = 'target='.$target;
}

$urlOptions = implode('&amp;', $urlOptions);

$n = substr(md5(rand()),0,7);

$count = $params->get('count', 1);
$width = $params->get('width', 300);
$height = $params->get('height', 250);
$zoneid = $params->get('zoneid', null);
$i = 0;

if (!$zoneid) {
  return;
}
?>



<?php if ($count > 1) : ?>

  <table border="0"
       cellpadding="0"
       cellspacing="0"
       width="100%"
       class="mcnImageBlock"
       style="border-collapse: collapse;
              mso-table-lspace: 0pt;
              mso-table-rspace: 0pt;
              -ms-text-size-adjust: 100%;
              -webkit-text-size-adjust: 100%;">
    <tbody class="mcnImageBlockOuter">
      <tr>
        <td valign="top"
            style="mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;"
            class="mcnImageBlockInner">

<?php endif; ?>






<?php while($i < $count) : ?>
<!-- ADVERTISEMENT -->

<?php $href = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?zoneid='.trim($zoneid).'&amp;cb='.$n.$i; ?>
<?php $src  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?zoneid='.trim($zoneid).'&amp;cb='.$n.$i; ?>
<table border="0"
       cellpadding="0"
       cellspacing="0"
       width="100%"
       class="mcnImageBlock"
       style="border-collapse: collapse;
              mso-table-lspace: 0pt;
              mso-table-rspace: 0pt;
              -ms-text-size-adjust: 100%;
              -webkit-text-size-adjust: 100%;">
  <tbody class="mcnImageBlockOuter">
    <tr>
      <td valign="top"
          style="mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
          -ms-text-size-adjust: 100%;
          -webkit-text-size-adjust: 100%;"
          class="mcnImageBlockInner">
        <a href="<?=$href?>"
           target="_blank">
          <img align="left"
               alt=""
               src="<?=$src?>"
               width="<?=$width?>"
               height="<?=$height?>"
               style="max-width: <?=$width?>px;
                      max-height: <?=$height?>px;
                      padding-bottom: 0;
                      display: inline !important;
                      vertical-align: bottom;
                      border: 0;
                      outline: none;
                      text-decoration: none;
                      -ms-interpolation-mode: bicubic;"
                      class="mcnImage">
        </a>
      </td>
    </tr>
  </tbody>
</table>
<!-- /ADVERTISEMENT -->
<?php $i++; endwhile; ?>


<?php if ($count > 1) : ?>
          </td>
      </tr>
    </tbody>
  </table>
<?php endif; ?>