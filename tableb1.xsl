<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
    <head>
    <style>
      #tab {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        
        #tab td,
        #tab th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #tab td:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        #tab td:hover {
            background-color: #ddd;
        }
        
        #tab th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4b4276;
            color: white;
        }
    </style>
  </head>
  <body>
    <h2><center>BOOKING DETAILS OF BRAZIL-5/6 PLAN</center></h2>
    <table border="1" id="tab">
      <tr bgcolor="#9acd32">
            <th>Name</th>
            <th>E-Mail</th>
            <th>Contact no</th>
            <th>Date</th>
            <th>Adult</th>
            <th>Child</th>
            <th>State</th>
            <th>Price</th>
      </tr>
      <xsl:for-each select="document/data">
      <tr>
        <td><xsl:value-of select="Name" /></td>
        <td><xsl:value-of select="E-Mail" /></td>
        <td><xsl:value-of select="Contact_no" /></td>
        <td><xsl:value-of select="Date" /></td>
        <td><xsl:value-of select="Adult" /></td>
        <td><xsl:value-of select="Child" /></td>
        <td><xsl:value-of select="State" /></td>
        <td><xsl:value-of select="Price" /></td>  
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>