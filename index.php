<HTML>
<HEAD>
<TITLE>Web-Site-Title</TITLE>
<SCRIPT LANGUAGE="JavaScript">
     var sizes = new Array(0,1,2,4,8,10,12);
     sizes.pos = 0;

function Elastic()
{
     var el = document.all.elastic
     if (null == el.direction)el.direction =1
     else if ((sizes.pos > sizes.length -2) || (0 == sizes.pos))
     el.direction *= -1
     el.style.letterSpacing = sizes[sizes.pos += el.direction]
setTimeout('Elastic()',100)
}

</SCRIPT>
<BODY bgcolor="gray" onLoad=Elastic()>
<CENTER>
<br><br><br><br>
<br><br><br><br>
<font color="green"><h2>Hello From</h2>
<font color="gold"><H1 ID="elastic" ALIGN="Center">GitHub ACTIONS!!!</H1>

</body>
</HTML>
