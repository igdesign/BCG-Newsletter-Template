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


$width = $params->get('width', 300);
$height = $params->get('height', 250);



$configuration = $params->get('configuration', '');
if (!$configuration) {
  return;
}

// if config starts with { remove it.
$configuration = ltrim($configuration, '{');

// wrap config in curlys
$configuration = '{' . $configuration . '}';

// make it usable
$configuration = json_decode($configuration);



// for each config
foreach($configuration as $zone_name=>$config) {

  // possible parameters
  $banner_id     = null;

  // zone id specified
  if (isset($config->banner_id)) {
    $banner_id = $config->banner_id; ?>
      <!-- BEGIN AD BLOCK // -->
      <table border="0"
             cellpadding="0"
             cellspacing="0"
             width="100%"
             class="mcnImageBlock">
        <tbody class="mcnImageBlockOuter">
          <tr>
            <td valign="top"
                style="padding: 0px"
                class="mcnImageBlockInner">
              <table align="left"
                     width="100%"
                     border="0"
                     cellpadding="0"
                     cellspacing="0"
                     class="mcnImageContentContainer">
                <tbody>
                  <tr>
                    <td class="mcnImageContent"
                        valign="top"
                        style="padding-right: 0px;
                               padding-left: 0px;
                               padding-top: 0;
                               padding-bottom: 0;
                               text-align: center;">
                      <a href="http://<?php echo $serverURL; ?>/<?php echo $deliveryPath; ?>/ck.php?n=<?php echo $n; ?>"
                         target="_blank"
                         style="border: 0;">
                        <img align="center"
                             alt=""
                             src="http://<?php echo $serverURL; ?>/<?php echo $deliveryPath; ?>/avw.php?bannerid=<?php echo $banner_id; ?>&amp;n=<?php echo $n; ?>"
                             width="<?=$width?>"
                             style="max-width: 100%;
                                    padding-bottom: 0;
                                    display: inline !important;
                                    vertical-align: bottom;
                                    border:0;"
                             class="mcnImage">
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- // END AD BLOCK -->
    <?php
  }

}
?>