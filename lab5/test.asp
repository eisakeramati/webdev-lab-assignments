
<%
name = Request.QueryString("mycolor")
response.write ("<head><style> body{ background-color:")
response.write ( name)
response.write (";} </style></head>")
response.write ("<div style='font-size:1.6em;color:black; text-align:center; background-color:")
response.write ( name)
response.write (";'>This is my first ASP program.</div>")
if IsNull(request.cookies("Date")) then
  response.write("<p style='text-align:center;'>First visit!</p>")
else
  mydate = request.cookies("Date")
  mytime = request.cookies("Time")
  response.write("<p style='text-align:center;'>")
  response.write (mydate)
  response.write (mytime)
  response.write ("</p>")
end if
response.cookies("Date") = FormatDateTime(date, vbgeneraldate)
response.cookies("Time") = FormatDateTime(now(),vblongtime)
%>
