<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
    <body>
      <div style="border-radius: 5px;
      border-style: solid;
      font-family: 'Source Sans Pro', sans-serif;
      text-align: center;
      background-color: #F0E68CCC;
      width: 700px;
      margin-left: auto;
      margin-right: auto;">
      <h2>music</h2>
      <xsl:for-each select="response/data/item">
        <p>
          <xsl:value-of select="song"/>
        </p>
        <p>
          <xsl:value-of select="title"/>
        </p>
        <p>
          <xsl:value-of select="track/artist"/>
        </p>
        <p>
          <xsl:value-of select="track/album"/>
        </p>
        <img>
          <xsl:attribute name="src">
              <xsl:value-of select="track/imageurl"/>
          </xsl:attribute>
      </img>
      </xsl:for-each>
    </body>
  </div>
  </html>
</xsl:template>
</xsl:stylesheet>
