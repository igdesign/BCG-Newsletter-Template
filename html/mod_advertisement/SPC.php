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






$configuration = $params->get('configuration', '');
if (!$configuration) {
  return;
}



// if config starts with { remove it.
$configuration = trim($configuration, '{},');




// wrap config in curlys
$configuration = '{' . $configuration . '}';



// make it usable
$configuration = json_decode($configuration);



// for each config
foreach($configuration as $zone_name=>$config) {


  switch($config->size) {


		case 'b':
		  $bannerid = $config->id;

      $href = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($bannerid);
      $src  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($bannerid).'&amp;cb='.$n;

			$ads_ready[] =
				'<tr>
				  <td colspan="3">
				    <a href="'.$href.'" target="_blank"><!--
				 	 --><img src="'.$src.'" border="0" width="300" height="250" /><!--
				 --></a>
				  </td>
				</tr>';
			break;

		case 'e':
		  $bannerid = $config->id;

      $href = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($bannerid);
      $src  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($bannerid).'&amp;cb='.$n;

			$ads_ready[] =
				'<tr>
				  <td colspan="3">
				    <a href="'.$href.'" target="_blank"><!--
				 	 --><img src="'.$src.'" border="0" width="300" height="50" /><!--
				 --></a>
				  </td>
				</tr>';
			break;

		case 'd':

      $href1 = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($config->id1);
      $src1  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($config->id1).'&amp;cb='.$n;
      $href2 = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($config->id2);
      $src2  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($config->id2).'&amp;cb='.$n;

			$ads_ready[] =
				'<tr>
					<td align="left" >
					  <a href="'.$href1.'" target="_blank"><!--
				 	--><img src="'.$src1.'" border="0" width="140" height="280" /><!--
				 --></a>
				 	</td>
				 	<td align="right">
				 	  <a href="'.$href2.'" target="_blank"><!--
				 	 --><img src="'.$src2.'" border="0" width="140" height="280" /><!--
				 --></a>
				 	</td>
				 </tr>';
			break;

		default:
			break;

	}
}

echo implode('<tr><td colspan="2" height="10"></td></tr>', $ads_ready);

