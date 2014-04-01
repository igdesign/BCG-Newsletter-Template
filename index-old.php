<?php
defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$doc = JFactory::getDocument();
$template = JURI::base().'templates/'.$this->template;
$template = 'http://britishcolumbiagolf.org/templates/'.$this->template;

include 'template_includes.php';


?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en-gb">
<head>
  <style type="text/css">
    a img,
    img,
    #header a {
      border: none;
      text-decoration: none;
    }

    a {
      color: #0054a4;
      text-decoration: underline;
      border: none;
    }

  </style>
</head>
<body <?= $cssBody ?>>
  <center>
  	<table border="0" cellspacing="0" cellpadding="0" width="728" <?= $cssTable ?>>


      <!-- HEADER -->
      <tr>
        <td colspan="3">

          <!-- Header TABLE -->
          <table <?= $cssHeader ?> border="0" cellpadding="0" cellspacing="0" width="728">
                		<!-- first row -->
                		<tr>
          		<td rowspan="3">
          			<img src="<?= $template.'/img/'; ?>header_01.jpg" width="179" height="171" alt=""></td>
          		<td colspan="5" height="70">
          			<jdoc:include type="modules" name="newsletter-header" style="clean" />
          		</td>
          	</tr>
          	<tr>
          		<td rowspan="2">
          			<img src="<?= $template.'/img/'; ?>header_03.jpg" width="88" height="101" alt=""></td>
          		<td>
          			<img src="<?= $template.'/img/'; ?>header_04.jpg" width="103" height="29" alt=""></td>
          		<td>
          			<img src="<?= $template.'/img/'; ?>header_05.jpg" width="118" height="29" alt=""></td>
          		<td>
          			<img src="<?= $template.'/img/'; ?>header_06.jpg" width="94" height="29" alt=""></td>
          		<td>
          			<img src="<?= $template.'/img/'; ?>header_07.jpg" width="146" height="29" alt=""></td>
          	</tr>
          	<tr>
          		<td colspan="4">
          			<img src="<?= $template.'/img/'; ?>header_08.jpg" width="461" height="72" alt=""></td>
          	</tr> <!-- /second row second row -->
          </table> <!-- /Header Table-->

        </td>
      </tr> <!-- /HEADER -->

  		<!-- LEADERBOARD -->
  		<tr>
  			<td id="leaderboard" colspan="3">
          <jdoc:include type="modules" name="newsletter-leaderboard" style="none" />
  			</td>
  		</tr> <!-- /LEADERBOARD -->

  		<tr><td colspan="2" height="10"></td></tr>

    	<!-- menu -->
    	<tr>
    	  <td valign="top">
    	    <table border="0" cellpadding="0" cellspacing="0">
    	      <tr>
    	        <td>
            	  <jdoc:include type="modules" name="newsletter-content" style="none" />
    	        </td>
    	      </tr>
    	      <tr>
    	        <td height="10"></td>
    	      </tr>
    	      <tr>
    	        <td>
            	  <jdoc:include type="component" />
    	        </td>
    	      </tr>
    	    </table>
    	  </td>
    	  <td width="10" ></td>
    	  <td width="300" valign="top" colspan="2">
    	  	<table id="ads" cellpadding="0" cellspacing="0" border="0" width="300" >
    	    	<jdoc:include type="modules" name="newsletter-advertisements" style="none" />
    	  	</table>
    	  </td> <!-- /ADVERTISEMENTS -->
    	</tr> <!-- /menu -->

  			<!-- MENU -->
  		<tr>
  		  <td id="menu" colspan="3" >
  		    <center>
            <jdoc:include type="modules" name="newsletter-footer" style="none" />
          </center>
  		  </td>
  		</tr> <!-- /MENU -->

  	</table>
  </center>
</body>
</html>
