<?php

include 'header.php';

if ('cinema' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';

    make_cblock();

    echo '<br>';
} else {
    $xoopsOption['show_rblock'] = 0;

    require XOOPS_ROOT_PATH . '/header.php';
}
OpenTable();
//global $xoopsConfig;
include 'language/' . $xoopsConfig['language'] . '/main.php';
//error_reporting (E_ALL);
?>
<style type="text/css">
    <!--
    .Style1 {
        color: #FFFFFF;
        font-size: 10px;
    }

    -->
</style>


<div align="center"></div>
<p><font color="#FFFFFF">
        <div align="center"></div>
        <div align="center">
</p>
<table width="600" height="515" border="1" bgcolor="#000000">
    <caption>

    </caption>
    <tr>
        <td height="509">
            <p align="center">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="500" height="148" align="middle">
                    <param name="movie" value="cache/annonce.swf">
                    <param name="quality" value="high">
                    <param name="SCALE" value="exactfit">
                    <param name="LOOP" value="false">
                    <embed src="cache/annonce.swf" width="500" height="148" loop="false" align="middle" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" scale="exactfit"></embed>
                </object>
            </p>
            <p align="center">
            <div align="center">
                <iframe src="http://www.allocine.fr/webtv/acvision.asp?CVid=&Emission=1&BookMark=" name="bande annonce" width="700" height="500" align="default"></iframe>
            </div>
            </p>
            <p align="center" class="Style1">module cr&eacute;&eacute; par <a href="http://www.totalgratuit.com">http://www.totalgratuit.com</a></p></td>


    </tr>
</table>
</div>


<?php
CloseTable();
include '../../footer.php';
?>
