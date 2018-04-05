<html>
<head>
<title>Employee Registration </title>
</head>
<style type="text/css">
h3
{
    font-family: TIMES NEW ROMAN;
font-size: 22pt;
font-style: normal;
font-weight: bold;
color: #0000ff;
}
table
{font-family: Calibri;
color:White;
font-size: 11pt;
font-style: normal;
background-color: #eff3f6;
color: #000; border-collapse: collapse;
border: 2px solid navy }
table.inner{border: 0px}
.btnLogin
{
float:center;
background-color: #f44336; /* Green */
    border-radius: 4px;
    border: 2px solid black;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;

}
.btnLogin:hover {
    background-color: #00cc66; 
    color: white;
}
</style>
</head>
<body bgcolor="#66ffcc">
<h3 align="center">EMPLOYEE REGISTRATION </h3>
<form action="reg.php" method="POST">
<table align="center" cellpadding="10">
<td>NAME</td>
<td><input type="text" name="name" maxlength="20"/>
</td>
</tr>
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email" maxlength="100" />
</td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="text" name="pass" maxlength="16" />
</td>
</tr>
<tr>
<td>MOBILE NUMBER</td>
<td><input type="text" name="mn" maxlength="10" />
(10 digit number)
</td>
</tr>
</tr>
<td>LOCATION</td>
<td><input type="text" name="loc" maxlength="30"/>
</td>
</tr>
<tr>
<td>ADDRESS<br /><br /></td>
<td><textarea name="add" rows="4" cols="30">
</textarea>
</td>
</tr>
<tr>
<td>PAN NO</td>
<td><input type="text" name="pan" maxlength="10" />
</td>
</tr>
<tr>
<td>AADHAAR NO</td>
<td><input type="text" name="aad" maxlength="12" />
(12 digit number)
</td>
</tr>

<td colspan="2" align="center">
<input type="submit" class="btnLogin" value="Submit" name="submit" tabindex="4">
<input type="submit" class="btnLogin" value="Reset" tabindex="4">
</td>
</tr>
</table>
</body>
</html>

