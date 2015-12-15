<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php $this->setGenerator(''); ?>
<?php 
$logotype = $this->params->get( 'Logotype' );
$background = $this->params->get( 'Background' );
$font = $this->params->get( 'font' );
$size = $this->params->get( 'size' );

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
body {
	background-image:url(./templates/gazette_joohopia/images/background/<?php echo($background); ?>);
		background-attachment:fixed;
height:100%;
	background-repeat:repeat;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #666;
		font-family:<?php echo($font); ?>;
	font-size:<?php echo($size); ?>px;}
	</style>
<link href="./templates/gazette_joohopia/css/gazette.css" rel="stylesheet" type="text/css" />
</head>
<body>
<br />
<br />
<table width="90%" class="maximus" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="middle" class="topleft"><div style="margin:15px; display:inline;"><img src="./images/stories/<?php echo($logotype);?>" alt="Joohopia Template" align="middle" /><?php if($this->countModules('user4')) : ?><div style="display:inline-table; float:right; vertical-align:top; text-align:right;"><jdoc:include type="modules" name="user4" /></div><?php endif; ?></div></td>
          <td width="76px" valign="top" class="topright"></td>
          
        </tr>
      </table></td>
  </tr>
  <tr>
    <td bgcolor="#E5E2D5"></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15px" style="height:1px" bgcolor="#E5E2D4"></td>
          <td height="1px" bgcolor="#FF9900"><img src="./images/blank.gif" height="1" width="1" alt=" "/></td>
          <td width="15px" bgcolor="#E5E2D4"></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15px" bgcolor="#E5E2D4"></td>
          <td height="2px" bgcolor="#E5E2D4"><img src="./images/blank.gif" height="2" width="1" alt=" "/></td>
          <td width="15px" bgcolor="#E5E2D4"></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15px" bgcolor="#E5E2D4"></td>
          <td height="2px" bgcolor="#FF9900"><img src="./images/blank.gif" height="2" width="1" alt=" "/></td>
          <td width="15px" bgcolor="#E5E2D4"></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td bgcolor="#E5E2D4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="15px"></td>
          <td width="165px" align="left" valign="top"><jdoc:include type="modules" name="left" />
            <jdoc:include type="modules" name="user1" /></td>
          <td width="15px" class="green_v"><img src="./images/blank.gif" height="2" width="1" alt=" " /></td>
          <td valign="top"><jdoc:include type="component" /><?php if($this->countModules('user3')) : ?><br /><jdoc:include type="modules" name="user3" /><br /><?php endif; ?></td>
          <?php if($this->countModules('right') || $this->countModules('user2')) : ?>
          <td width="15px" class="green_v"><img src="./images/blank.gif" height="2" width="1" alt=" " /></td>
          <td width="165px" align="left" valign="top"><jdoc:include type="modules" name="right" />
            <jdoc:include type="modules" name="user2" /></td>
          <?php endif; ?>
          <td width="15px"></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td bgcolor="#E5E2D4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="yel_left"></td>
          <td >&nbsp;</td>
          <td class="yel_right">&nbsp;</td>
        </tr>
        <tr >
          <td style="background:url(./templates/gazette_joohopia/images/yel_bottom.gif);background-repeat:repeat; background-position:bottom; background-repeat:repeat-x; background-color:#e98b00" align="center">&nbsp;</td>
          <td style="background:url(./templates/gazette_joohopia/images/yel_bottom.gif);background-repeat:repeat; background-position:bottom; background-repeat:repeat-x; background-color:#e98b00" align="center"><br />
            <jdoc:include type="modules" name="footer" />
            <br /></td>
          <td style="background:url(./templates/gazette_joohopia/images/yel_bottom.gif);background-repeat:repeat; background-position:bottom; background-repeat:repeat-x; background-color:#e98b00" align="center">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
</table>
<br />
<div style="text-align:right; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:9px; color:#999"><a title="Joomla Templates" style="color:#333" href="http://joomlatp.com" target="_blank">Joomla Templates</a></div>
</body>
</html>
