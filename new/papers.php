<?php

/* Data definition (paper header, footer, text and sound) */

define("MAX_INDEX", 15);

$paper_header = "<TABLE border=1 align=center width=650><TBODY><TR><TD rowSpan=3 width=12></TD><TD width=118></TD><TD width=480></TD><TD rowSpan=3 width=12></TD></TR>";

$paper_footer = "</TBODY></table>";

$paper_text[1] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 1</B><BR><BR>Packing List for Inspection Trips,  1991</font></TD><TD width=480><IMG src='images/paper01_big.jpg' border=1></TD></tr>";

$paper_sound[1] = "";

$paper_text[2] = "<TR><TD width=118><center><IMG src='images/smile.jpg' border=0><br><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 2</B><BR><BR>Sick Bag, Systems Department, Bogota, 1993</font></center></TD><TD width=480><IMG src='images/paper02_big.jpg' border=1></TD></tr>";

$paper_sound[2]= "<BGSOUND SRC='sounds/airplane.wav' LOOP='INFINITE'>";

$paper_text[3] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 3</B><BR><BR>Colombian Expressions,<BR>1995 - 1998</font></TD><TD width=480><IMG src='images/paper03_big.jpg' border=1></TD></tr>";

$paper_sound[3] = "";

$paper_text[4] = "<TR><TD width=118><center><IMG src='images/smile.jpg' border=0><br><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 4</B><BR><BR> Intra-Day Time Recording System, 2000</font></center></TD><TD width=480><IMG src='images/paper04_big.jpg' border=1></TD></tr>";

$paper_sound[4] = "";

$paper_text[5] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 5</B><BR><BR> Letter from Tokyo, 1998</font></TD><TD width=480><IMG src='images/paper05_big.jpg' border=1></TD></tr>";

$paper_sound[5] = "";

$paper_text[6] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 6</B><br><br>Analysis of hours worked, 1995</font></TD><TD width=480><IMG src='images/paper06_big.jpg' border=1></TD></tr>";

$paper_sound[6] = "";

$paper_text[7] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 7</B><br><br>Radio reception notes, 1998 to 2000</font></TD><TD width=480><IMG src='images/paper07_big.jpg' border=1></TD></tr>";

$paper_sound[7] = "";

$paper_text[8] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 8</B><br><br>Admin Points about Hotel, Frankfurt, 1996</font></TD><TD width=480><IMG src='images/paper08_big.jpg' border=1></TD></tr>";

$paper_sound[8] = "";

$paper_text[9] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 9</B><br><br>Beers Consumed, Brussels, 1997</font></TD><TD width=480><IMG src='images/paper09_big.jpg' border=1></TD></tr>";

$paper_sound[9] = "";

$paper_text[10] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 10</B><br><br>List of countries that Tim has visited, 2000</font></TD><TD width=480><IMG src='images/paper10_big.jpg' border=1></TD></tr>";

$paper_sound[10] = "";

$paper_text[11] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 11</B><br><br>A list of words which when spellchecked give interesting alternatives.</font></TD><TD width=480><IMG src='images/paper11_big.jpg' border=1></TD></tr>";

$paper_sound[11] = "";

$paper_text[12] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 12</B></font></TD><TD width=480><IMG src='images/paper12_big.jpg' border=1></TD></tr>";

$paper_sound[12] = "";

$paper_text[13] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 13</B><BR><BR>Notes Connections, Dubai, 1999</font></TD><TD width=480><IMG src='images/paper13_big.jpg' border=1></TD></tr>";

$paper_sound[13] = "";

$paper_text[14] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 14</B><BR><BR>List of Tim's Arab music collection, 1999</font></TD><TD width=480><IMG src='images/paper14_big.jpg' border=1></TD></tr>";

$paper_sound[14] = "";

$paper_text[15] = "<TR><TD width=118><FONT face='Comic Sans MS' color=#800000 size=1><B>Working Paper 15</B><BR><BR>Things To Do List, Dubai, 1996</font></TD><TD width=480><IMG src='images/paper15_big.jpg' border=1></TD></tr>";

$paper_sound[15] = "";

/* Print specified paper */

if(!isset($_GET["num"])) $num="thumb";
else $num = $_GET["num"];
require_once("header.php");
if($num=="thumb") {
  echo("<H1>Working Papers</H1>");
  echo("<TABLE BORDER=0>");
  for($i=1; $i<=MAX_INDEX; $i++) {
    if(($i-1)%3==0) echo("<TR>");
    echo("<TD WIDTH='250' HEIGHT='150'><A HREF='papers.php?num=".$i."'>Working Paper ".$i."<BR>");
    echo("<IMG src='images/paper".str_pad($i,2,"0",STR_PAD_LEFT)."_small.jpg'></A></TD>");
    if(($i-1)%3==2) echo("</TR>");
  }
  echo("</TABLE>");
} else if($num=="all") {
  for($i=1; $i<=MAX_INDEX; $i++) {
    echo($paper_header.$paper_text[$i].$paper_footer);
  }
} else {
  if($num>MAX_INDEX) {
    echo("<H1>Additional Working Paper</H1>");
    echo("<A HREF='papers.php?num=".($num-100)."'>Back to the main working paper</A><BR><BR>");
    echo($paper_header.$paper_text[$num].$paper_footer.$paper_sound[$num]."<BR>");
    echo("<A HREF='papers.php?num=".($num-100)."'>Back to the main working paper</A><BR>");
  } else {
    echo("<H1>Working Paper ".$num."</H1>");
    echo("<A HREF='papers.php?num=".(($num-1!=0)?($num-1):MAX_INDEX)."'>&lt;&lt; Previous</A>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
    echo("<A HREF='papers.php'>Back to the list</A>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
    echo("<A HREF='papers.php?num=".(($num+1<=MAX_INDEX)?($num+1):1)."'>Next &gt;&gt;</A><BR><BR>");
    echo($paper_header.$paper_text[$num].$paper_footer.$paper_sound[$num]."<BR>");
    echo("<A HREF='papers.php?num=".(($num-1!=0)?($num-1):MAX_INDEX)."'>&lt;&lt; Previous</A>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
    echo("<A HREF='papers.php'>Back to the list</A>");
    echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
    echo("<A HREF='papers.php?num=".(($num+1<=MAX_INDEX)?($num+1):1)."'>Next &gt;&gt;</A><BR>");
  }
}
require_once("footer.php");
?>
