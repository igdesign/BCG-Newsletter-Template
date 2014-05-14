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
				 '<!-- BEGIN AD BLOCK // -->
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
                          <a href="'.$href.'"
                             target="_blank"
                             style="border: 0;">
                            <img align="center"
                                 alt=""
                                 src="'.$src.'"
                                 width="300"
                                 style="max-width: 300px;
                                        padding-bottom: 0;
                                        display: inline !important;
                                        vertical-align: bottom;
                                        border: 0;"
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
          <!-- // END AD BLOCK -->';
			break;

		case 'e':
		  $bannerid = $config->id;

      $href = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($bannerid);
      $src  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($bannerid).'&amp;cb='.$n;

			$ads_ready[] =
				 '<!-- BEGIN AD BLOCK // -->
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
                          <a href="'.$href.'"
                             target="_blank"
                             style="border: 0;">
                            <img align="center"
                                 alt=""
                                 src="'.$src.'"
                                 width="300"
                                 style="max-width: 300px;
                                        padding-bottom: 0;
                                        display: inline !important;
                                        vertical-align: bottom;
                                        border: 0"
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
          <!-- // END AD BLOCK -->';
			break;

		case 'd':

      $href1 = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($config->id1);
      $src1  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($config->id1).'&amp;cb='.$n;
      $href2 = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($config->id2);
      $src2  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($config->id2).'&amp;cb='.$n;

			$ads_ready[] =
				'<!-- BEGIN AD BLOCK // -->
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
                          <a href="'.$href1.'"
                             target="_blank"
                             style="border: 0;">
                            <img align="center"
                                 alt=""
                                 src="'.$src1.'"
                                 width="140"
                                 style="max-width: 140px;
                                        padding-bottom: 0;
                                        display: inline !important;
                                        vertical-align: bottom;
                                        border="0""
                                 class="mcnImage">
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>

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
                          <a href="'.$href2.'"
                             target="_blank"
                             style="border: 0;">
                            <img align="center"
                                 alt=""
                                 src="'.$src2.'"
                                 width="140"
                                 style="max-width: 140px;
                                        padding-bottom: 0;
                                        display: inline !important;
                                        vertical-align: bottom;
                                        border: 0;"
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
          <!-- // END AD BLOCK -->';
			break;

		default:
			break;

	}
}

echo implode('<table><tr><td height="10"></td></tr></table>', $ads_ready);