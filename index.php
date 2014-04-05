<?php
defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$doc = JFactory::getDocument();
$template = JURI::base().'templates/'.$this->template;
$template = 'http://britishcolumbiagolf.org/templates/'.$this->template;

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
            "http://www.w3.or=g/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width,  initial-scale=1.0">
  <title>Test Email</title>

  <!--[if gte mso 6]>
  <style>
      table.mcnFollowContent {width:100% !important;}
      table.mcnShareContent {width:100% !important;}
  </style>
  <![endif]-->

  <style type="text/css">
    <?php include 'style.css'; ?>
  </style>

</head>

<body leftmargin="0"
      marginwidth="0"
      topmargin="0"
      marginheight="0"
      offset="0"
      style="margin: 0;
             padding: 0;
             -ms-text-size-adjust: 100%;
             -webkit-text-size-adjust: 100%;
             background-color: #e0edd5;
             height: 100% !important;
             width: 100% !important;">
  <center>
    <table align="center"
           border="0"
           cellpadding="0"
           cellspacing="0"
           height="100%"
           width="100%"
           id="bodyTable"
           style="border-collapse: collapse;
                  mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                  -ms-text-size-adjust: 100%;
                  -webkit-text-size-adjust: 100%;
                  margin: 0;
                  padding: 0;
                  background-color: #e0edd5;
                  height: 100% !important;
                  width: 100% !important;">
      <tr>
        <td align="center"
            valign="top"
            id="bodyCell"
            style="mso-table-lspace: 0pt;
                   mso-table-rspace: 0pt;
                   -ms-text-size-adjust: 100%;
                   -webkit-text-size-adjust: 100%;
                   margin: 0;
                   padding: 20px;
                   border-top: 0;
                   height: 100% !important;
                   width: 100% !important;">

          <!-- BEGIN TEMPLATE // -->
          <table bgcolor="#ffffff"
                 border="0"
                 cellpadding="5"
                 cellspacing="0"
                 width="728"
                 id="templateContainer"
                 style="border-collapse: collapse;
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                        -ms-text-size-adjust: 100%;
                        -webkit-text-size-adjust: 100%;
                        border: 0;">

            <!-- BEGIN PREHEADER // -->
            <tr>
              <td colspan="2"
                  align="center"
                  valign="top"
                  style="mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                  -ms-text-size-adjust: 100%;
                  -webkit-text-size-adjust: 100%;">

                <?php include 'index_preheader.php'; ?>
              </td>
            </tr>
            <!-- // END PREHEADER -->



            <!-- BEGIN HEADER // -->
            <tr>
              <td colspan="2"
                  align="center"
                  valign="top"
                  style="mso-table-lspace: 0pt;
                         mso-table-rspace: 0pt;
                         -ms-text-size-adjust: 100%;
                         -webkit-text-size-adjust: 100%;">

                <?php include 'index_header-img.php'; ?>

                <?php include 'index_header-leaderboard.php'; ?>
              </td>
            </tr>
            <!-- // END HEADER -->

            <!-- CONTENT -->
            <tr>
              <td>

                <!-- LEFT COLUMN -->
                <table border="0"
                       width="418"
                       cellpadding="0"
                       cellspacing="0"
                       align="left"
                       class="mcnCaptionTopContent"
                       style="border-collapse: collapse;
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              -ms-text-size-adjust: 100%;
                              -webkit-text-size-adjust: 100%;">
                  <tr>
                    <td align="center"
                        valign="top"
                        class="sectionContainer"
                        style="mso-table-lspace: 0pt;
                               mso-table-rspace: 0pt;
                               -ms-text-size-adjust: 100%;
                               -webkit-text-size-adjust: 100%;">
                      <table border="0"
                             width="418"
                             cellpadding="0"
                             cellspacing="0"
                             id="templateBodyInner"
                             style="border-collapse: collapse;
                                    mso-table-lspace: 0pt;
                                    mso-table-rspace: 0pt;
                                    -ms-text-size-adjust: 100%;
                                    -webkit-text-size-adjust: 100%;">
                        <tr>
                          <td valign="top"
                              class="bodyContainer"
                              style="mso-table-lspace: 0pt;
                                     mso-table-rspace: 0pt;
                                     -ms-text-size-adjust: 100%;
                                     -webkit-text-size-adjust: 100%;">

                            <!-- BODY MENU -->
                            <table border="0"
width="418"
class="mcnCaptionTopContent"
cellpadding="5"
cellspacing="0"
style="border-collapse: collapse;
mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;">
                              <tr>
                                <jdoc:include type="modules" name="newsletter-content" style="none" />
                              </tr>
                            </table>
                            <!-- /BODY MENU -->

                            <!-- COMPONENT -->
                            <table border="0"
width="418"
cellpadding="0"
cellspacing="0"
class="mcnCaptionTopContent"
style="border-collapse: collapse;
mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;">
                              <tbody class="mcnTextBlockOuter">
                                <tr>
                                  <td valign="top"
class="mcnTextBlockInner"
style="mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;">
                                    <jdoc:include type="component" />
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- /COMPONENT -->


                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <!-- /LEFT COLUMN -->


                <table align="left"
border="0"
width="10"
cellpadding="0"
cellspacing="0"
class="mcnCaptionTopContent"
style="border-collapse: collapse;
mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;">
                  <tr><td width="10">&nbsp;
</td></tr>
                </table>

                <!-- RIGHT COLUMN -->
                <table align="left"
border="0"
width="300"
cellpadding="0"
cellspacing="0"
class="mcnCaptionTopContent"
style="border-collapse: collapse;
mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;">
                  <tr>

                   <td align="left"
valign="top"
width="300"
class="sectionContainer"
style="mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;">
                    <table border="0"
cellpadding="0"
cellspacing="0"
width="100%"
id="templateSidebarInner"
style="border-collapse: collapse;
mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
border-left: 0;">
                      <tr>
                        <td valign="top"
class="sidebarContainer"
style="mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;">

                          <jdoc:include type="modules" name="newsletter-advertisements" style="none" />

                        </td>
                      </tr>
                      </table>

                    </td>
                  </tr>
                </table>
              </td>
              <!-- /RIGHT COLUMN -->
            </tr>
            <!-- // END CONTENT -->


            <tr>
              <td colspan="2"
align="center"
class="mcnImageContent"
valign="top"
style="mso-table-lspace: 0pt;
mso-table-rspace: 0pt;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;">

                <!-- BEGIN FOOTER // -->


                            <jdoc:include type="modules" name="newsletter-footer" style="none" />


              </td>
            </tr>
          </table>
          <!-- // END TEMPLATE -->
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
