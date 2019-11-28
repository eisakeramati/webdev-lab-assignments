#!/usr/bin/python
import cgi, cgitb
import re
print "Content-type:text/html\n\n"
form = cgi.FieldStorage()
nam = form.getvalue('name')
ph = form.getvalue('phone')
ad = form.getvalue('add')
city = form.getvalue('cit')
province = form.getvalue('prov')
x = re.split("-", ph, 0)
print '<html>'
print '<head>'
print '<style> #div1{ border-radius: 5px; border-style: solid; font-family: "Source Sans Pro", sans-serif; text-align: center; background-color: #ADD8E6; width: 700px;margin-left: auto;margin-right: auto;}</style>'
print '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>'
print '<script> $(document).ready(function(){$("#an1").animate({left: "550px", top: "50px"}); $("#an2").animate({left: "650px", top: "50px"}); $("#an3").animate({left: "750px", top: "50px"});});</script>'
print '</head>'
print '<body>'
print '<div><span id="an1" style="font-size:3.0em;height:100px;width:100px;position:absolute;">(%s)</span><span id="an2" style="font-size:3.0em;height:100px;width:100px;position:absolute;">%s</span><span id="an3" style="font-size:3.0em;height:100px;width:100px;position:absolute;">-%s</span></div>' %(x[0], x[1], x[2])
print '<div id ="div1">'
print '<p style:"font-size:3.0em;"> Phone Number: </p>'
print '<br>'
print '<br>'
print '<p> %s </p>' %(nam)
print '<br>'
print '<p> %s </p>' %(ad)
print '<br>'
print '<p> %s </p>' %(city)
print '<br>'
print '<p> %s </p>' %(province)
print '</div>'

print '</body>'
print '</html>'
