<script src="../../../../Scripts/swfobject_modified.js" type="text/javascript"></script><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<?php
$lan=$_GET['lan'];
$temp=$_GET['temp'];
$vars='temp='.$temp.'&lan='.$lan;
//$file='../../../../vlab/BIOTECH/CEL/Light-Microscope/Virtual Neuro.swf';
$file='Virtual Neuro.swf';
?>

<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="600">
  <param name="movie" value="<?php echo $file;?>">
  <param name="quality" value="high">
  <param name="wmode" value="opaque">
  <param name="swfversion" value="10.0.2.0">
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
  <param name="expressinstall" value="../../../../Scripts/expressInstall.swf">
  <param name="flashvars" value="<?php echo $vars;?>">
  <param name="allowfullscreen" value="true">
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="<?php echo $file;?>" width="800" height="600">
    <!--<![endif]-->
    <param name="quality" value="high">
    <param name="wmode" value="opaque">
    <param name="swfversion" value="10.0.2.0">
    <param name="expressinstall" value="../../../../Scripts/expressInstall.swf">
    <param name="flashvars" value="<?php echo $vars;?>">
    <param name="allowfullscreen" value="true">
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
     
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
