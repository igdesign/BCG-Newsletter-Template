<?php
defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;
$doc = JFactory::getDocument();
$template = JURI::base().'templates/'.$this->template;

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
          "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http: //www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>British Columbia Golf Newsletter</title>

  <!--[if gte mso 6]>
  <style>
      table.mcnFollowContent {width:100% !important;}
      table.mcnShareContent {width:100% !important;}
  </style>
  <![endif]-->

  <style type="text/css">
    <?php include 'style-new.css'; ?>
  </style>

  <!--[if gte mso 9]>
	<style>
		/* Target Outlook 2007 and 2010 */
	</style>
	<![endif]-->

</head>

<body leftmargin="0"
      marginwidth="0"
      topmargin="0"
      marginheight="0"
      offset="0"
      bgcolor="#e0edd5">

  <center>
    <table align="center"
           border="0"
           cellpadding="0"
           cellspacing="0"
           height="100%"
           width="100%"
           id="bodyTable">
      <tr>
          <td align="center"
              valign="top"
              id="bodyCell">

          <!-- BEGIN TEMPLATE // -->
          <table border="0"
                 cellpadding="0"
                 cellspacing="0"
                 width="728"
                 bgcolor="#ffffff"
                 id="templateContainer">
              <tr>
                <td align="center"
                    valign="top">

                  <!-- BEGIN PREHEADER // -->
                  <?php include 'index_preheader.php'; ?>
                  <!-- // END PREHEADER -->

                </td>
              </tr>
              <tr>
                  <td align="center"
                      valign="top">

                    <!-- BEGIN HEADER // -->
                    <table border="0"
                           cellpadding="5"
                           cellspacing="0"
                           width="728"
                           id="templateHeader">
                      <tr>
                        <td valign="top"
                            class="headerContainer">

                          <!-- BEGIN HEADER IMAGE // -->
                          <?php include 'index_header-img.php'; ?>
                          <!-- // END HEADER IMAGE -->

                          <!-- BEGIN LEADERBOARD // -->
                          <?php include 'index_header-leaderboard.php'; ?>
                          <!-- // END LEADERBOARD -->


                        </td>
                      </tr>
                    </table>
                    <!-- // END HEADER -->

                  </td>
                </tr>
                <tr>
                  <td align="center" valign="top">

                    <!-- BEGIN COLUMNS // -->
                    <?php include 'index_columns.php'; ?>
                    <!-- // END COLUMNS -->

                  </td>
                </tr>

                <tr>
                  <td align="center" valign="top">

                  <!-- BEGIN FOOTER // -->
                  <?php include 'index_footer.php'; ?>
                  <!-- // END FOOTER -->




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
