<?php
// No direct access.
defined('_JEXEC') or die;

JHTML::_('behavior.framework', true);
$app = JFactory::getApplication();
?>

<?php echo '<!DOCTYPE html>'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
 		<title>ENSIGGO Finance</title>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
		
</head>
<body>

<div id="wrapper">

    <div id="head">
    	
      <div id="logo"><a href=/<?php echo $this->baseurl ?>> <img src="<?php echo $this->baseurl ?>/images/logo.png" alt=""></a> </div>
      
      <div id="topnav"><jdoc:include type="modules" name="topnav" style="xhtml" /></div><!--#news-->
      
    </div><!--#head-->
    
    <div id="content">
        <div id="news"><jdoc:include type="modules" name="right" style="xhtml" /></div><!--#news-->
        <div id="component"><jdoc:include type="component" style="xhtml"/></div><!--#component-->
        <div id="menu"><jdoc:include type="modules" name="left" style="xhtml" /></div><!--#menu-->
    </div><!--#content-->
    
    <div id="footer">
      <jdoc:include type="modules" name="footer" style="xhtml" />
  </div><!--#footer-->
    
</div><!--#wrapper-->

</body>
</html>


