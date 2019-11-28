#!/usr/local/bin/ruby -w
print "Content-type: text/html\n\n"
require 'cgi'
cgi = CGI.new

puts "<head>"
puts "<style>"
puts "p {
    display: block;
    width: 500px;
    background: #C4F1FF;
    font: 1em Arial;
    color: #B2929C;
    -webkit-transition: background 2s ease-in, color 1s ease-in;
    text-align:center;
    margin-right:auto;
    margin-left:auto;
    font-size: 250%;
}"
puts "p:hover, p:focus {
    background: #CC9CAA;
    color: #FFFDDD;
    -webkit-transition: background 0.2s ease-in, color 0.1s ease-in;
}"
puts "#div1{
  border-radius: 5px;
  border-style: solid;
  font-family: 'Source Sans Pro', sans-serif;
  text-align: center;
  background-color: #ADD8E6;
  width: 700px;
  margin-left: auto;
  margin-right: auto;
}"
puts "</style>"
puts "</head>"

array = cgi['phone'].split("-")
print "<div id="div1">"
print "<p>"
print "<span style=\" color:red;\">"
print "("
print array[0]
print ")"
print "</span>"
print "<span style=\" color:blue;\">"
print array[1]
print "-"
print "</span>"
print "<span style=\" color:yellow;\">"
print array[2]
print "</span>"
print "</p>"
print "<h2 style=\"text-align:center; margin-right:auto; margin-left:auto; font: 3em Arial;\">"
print cgi['name']
print "</h2>"
print "<h3 style=\"text-align:center; margin-right:auto; margin-left:auto; font: 2em Arial;\">"
print cgi['add'].capitalize
print "</h3>"
print "<h3 style=\"text-align:center; margin-right:auto; margin-left:auto; font: 2em Arial;\">"
print cgi['cit'].capitalize
print "</h3>"
print "<h3 style=\"text-align:center; margin-right:auto; margin-left:auto; font: 2em Arial;\">"
print cgi['prov'].capitalize
print "</h3>"
print "</div>"
