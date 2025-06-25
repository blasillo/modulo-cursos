<?php

$greeting = isset($_GET['name']) ? 'Hola ' . $_GET['name'] . ',' : 'Hola,'; // SIN htmlspecialchars

$xml = new DOMDocument();
$xml->load('data.xml');

$myfile = fopen("data.xsl", "w");
$txt = '<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl">
  <xsl:template match="/">
    <html>
      <head>
        <title>Módulos del curso</title>
      </head>
      <body>
        <h2>' . $greeting . ' estos son los módulos del curso:</h2>
        <ol class="rectangle-list">
          <xsl:for-each select="modules/module">
              <li><span>Capa <xsl:value-of select="tier"/>: <b><xsl:value-of select="title"/></b> (por <xsl:value-of select="author"/>)</span></li>
          </xsl:for-each>
        </ol>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>';
fwrite($myfile, $txt);
fclose($myfile);

$xsl = new DOMDocument();
$xsl->load("data.xsl");

$xsltProcessor = new XSLTProcessor();
$xsltProcessor->registerPHPFunctions();
$xsltProcessor->importStylesheet($xsl);
$result = $xsltProcessor->transformToXML($xml);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Modulos del curso</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div>
  <?php echo $result; ?>
</div>

<hr>

<div class="row">
  <center>
    <h4>Introduce un nombre para la lista:</h4>
    <form action="index.php" method="get">
      <input type="text" name="name">
      <br><br>
      <input type="submit">
    </form>
  </center>
</div>

</body>
</html>
