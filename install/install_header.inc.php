<?php
/*
    This file is part of CoDev-Timetracking.

    CoDev-Timetracking is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    CoDev-Timetracking is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with CoDev-Timetracking.  If not, see <http://www.gnu.org/licenses/>.
*/

?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html>

<head>
<title>CoDev TimeTracking</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<?php
   echo "<link rel='shortcut icon' href='".Tools::getServerRootURL()."/images/favicon.ico' />\n";
   echo "<link href='".Tools::getServerRootURL()."/codev.css' rel='stylesheet' type='text/css' />\n";
   echo "<link href='".Tools::getServerRootURL()."/light.css' rel='stylesheet' type='text/css' media='print' />\n";
?>
</head>

<body>
<div id='header'>

<table style="border: 1px solid white;" width="100%" class="invisible">
<tr>
<td width=300>
<?php
   echo "<a href='".Tools::getServerRootURL()."/'><img src='".Tools::getServerRootURL()."/images/codevtt_logo_03.png' /></a>";
?>
</td>
<td>
<?php
   echo"<h1>$page_name</h1>";
?>
</td>
<td width=300>
<?php echo "<a href='".Tools::curPageName()."?locale=fr'><img src='".Tools::getServerRootURL()."/images/blank.png' class='flag flag-fr' title='Francais' width='18px' height='12px' /></a>";?>
&nbsp;
<?php echo "<a href='".Tools::curPageName()."?locale=en'><img src='".Tools::getServerRootURL()."/images/blank.png' class='flag flag-gb' title='English' width='18px' height='12px' /></a>";?>
&nbsp;
<?php echo "<a href='".Tools::curPageName()."?locale=de_DE'><img src='".Tools::getServerRootURL()."/images/blank.png' class='flag flag-de' title='Deutsch' width='18px' height='12px' /></a>";?>
&nbsp;
<?php echo "<a href='".Tools::curPageName()."?locale=pt_BR'><img src='".Tools::getServerRootURL()."/images/blank.png' class='flag flag-br' title='Brazil' width='18px' height='12px' /></a>";?>
</td>
</tr>
</table>

</div>
