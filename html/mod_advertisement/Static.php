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
      <a href="http://<?php echo $serverURL; ?>/<?php echo $deliveryPath; ?>/ck.php?n=<?php echo $n; ?>"
         target="_blank"><!--
      	 --><img src="http://<?php echo $serverURL; ?>/<?php echo $deliveryPath; ?>/avw.php?bannerid=<?php echo $banner_id; ?>&amp;n=<?php echo $n; ?>"
      	         border="0"
      	         width="<?=$width?>"
      	         height="<?=$height?>"
      	         style="padding-bottom: 0;
      	                display: inline !important;
      	                vertical-align: bottom;
      	                max-width: 100%;
      	                height: auto !important;
      	                border: 0;
      	                outline: none;
      	                text-decoration: none;
      	                -ms-interpolation-mode: bicubic;"
                        class="mcnImage"/><!--
      --></a>
    <?php
  }

}