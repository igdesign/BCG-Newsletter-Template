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
				 '<!-- ADVERTISEMENT -->
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
                    height="50"
                    width="300"
                    class="mcnImageBlockInner"
                    style="mso-table-lspace: 0pt;
                           mso-table-rspace: 0pt;
                           -ms-text-size-adjust: 100%;
                           -webkit-text-size-adjust: 100%;">
                  <a href="'.$href.'"
                     target="_blank">
                    <img align="left"
                         alt=""
                         src="'.$src.'"
                         width="300"
                         heigth="250"
                         class="mcnImage"
                         style="max-width: 300px;
                                padding-bottom: 0;
                                display: inline !important;
                                vertical-align: bottom;
                                border: 0;
                                outline: none;
                                text-decoration: none;
                                -ms-interpolation-mode: bicubic;">
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- /ADVERTISEMENT -->';
			break;

		case 'e':
		  $bannerid = $config->id;

      $href = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($bannerid);
      $src  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($bannerid).'&amp;cb='.$n;

			$ads_ready[] =
				 '<!-- ADVERTISEMENT -->
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
                    height="50"
                    width="300"
                    class="mcnImageBlockInner"
                    style="mso-table-lspace: 0pt;
                           mso-table-rspace: 0pt;
                           -ms-text-size-adjust: 100%;
                           -webkit-text-size-adjust: 100%;">
                  <a href="'.$href.'"
                     target="_blank">
                    <img align="left"
                         alt=""
                         src="'.$src.'"
                         width="300"
                         height="50"
                         class="mcnImage"
                         style="max-width: 300px;
                                padding-bottom: 0;
                                display: inline !important;
                                vertical-align: bottom;
                                border: 0;
                                outline: none;
                                text-decoration: none;
                                -ms-interpolation-mode: bicubic;">
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- /ADVERTISEMENT -->';
			break;

		case 'd':

      $href1 = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($config->id1);
      $src1  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($config->id1).'&amp;cb='.$n;
      $href2 = 'http://'.$serverURL.'/'.$deliveryPath.'/ck.php?bannerid='.trim($config->id2);
      $src2  = 'http://'.$serverURL.'/'.$deliveryPath.'/avw.php?bannerid='.trim($config->id2).'&amp;cb='.$n;

			$ads_ready[] =
				'<!-- /ADVERTISEMENT -->
				 <table border="0"
				        cellpadding="0"
				        cellspacing="0"
				        class="mcnImageGroupBlock"
				        style="border-collapse: collapse;
				               mso-table-lspace: 0pt;
				               mso-table-rspace: 0pt;
				               -ms-text-size-adjust: 100%;
				               -webkit-text-size-adjust: 100%;">

          <tr>
            <td valign="top"
                width="150"
                height="280"
                style="mso-table-lspace: 0pt;
                       mso-table-rspace: 0pt;
                       -ms-text-size-adjust: 100%;
                       -webkit-text-size-adjust: 100%;">
              <a href="'.$href1.'"
                 target="_blank">
                <img alt=""
                     src="'.$src1.'"
                     width="140"
                     height="280"
                     class="mcnImage"
                     style="max-width: 140px;
                            outline: none;
                            border: 0;
                            text-decoration: none;
                            -ms-interpolation-mode: bicubic;
                            vertical-align: bottom;">
              </a>
            </td>
            <td align="right"
                width="150"
                height="280"
                valign="top"
                style="mso-table-lspace: 0pt;
                       mso-table-rspace: 0pt;
                       -ms-text-size-adjust: 100%;
                       -webkit-text-size-adjust: 100%;">
              <a href="'.$href2.'"
                 target="_blank">
                <img alt=""
                     src="'.$src2.'"
                     width="140"
                     height="280"
                     class="mcnImage"
                     style="max-width: 140px;
                            outline: none;
                            border: 0;
                            text-decoration: none;
                            -ms-interpolation-mode: bicubic;
                            vertical-align: bottom;">
              </a>
            </td>
          </tr>
        </table>
        <!-- /ADVERTISEMENT -->';
			break;

		default:
			break;

	}
}

echo implode('<table><tr><td height="10"></td></tr></table>', $ads_ready);