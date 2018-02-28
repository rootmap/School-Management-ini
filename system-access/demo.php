<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="http://www.educationboardresults.gov.bd/lite/lib/style.css" rel="stylesheet" type="text/css">
</head>
<script src="http://www.educationboardresults.gov.bd/lite/lib/examboard.js"></script>
<script src="http://www.educationboardresults.gov.bd/lite/lib/validator.js"></script>

</head>

<body>
<form name="result" method="post" action="http://www.educationboardresults.gov.bd/lite/result.php">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="13%">&nbsp;
					<input type="hidden" name="sr" id="sr" value="3" />
					<input type="hidden" name="et" id="et" value="2" />
					</td>
                    <td width="74%"><fieldset>
                      <table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12bold">
                        <tr>
                          <td width="12%" align="left" valign="middle">&nbsp;</td>
                          <td width="24%" align="left" valign="middle">&nbsp;</td>
                          <td width="7%" align="left" valign="middle">&nbsp;</td>
                          <td width="46%" align="right" valign="middle">&nbsp;</td>
                          <td width="11%" align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="12%" align="left" valign="middle">&nbsp;</td>
                          <td width="24%" align="left" valign="middle">Examination</td>
                          <td width="7%" align="left" valign="middle">:</td>
                          <td width="46%" align="right" valign="middle"><select name="exam" class="textfield05" id="exam" onchange="fd(this);">
                            <option value="ssc">SSC/Dakhil/Equivalent</option>
                          </select></td>
                          <td width="11%" align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">Year</td>
                          <td align="left" valign="middle">:</td>
                          <td align="right" valign="middle"><select name="year" class="textfield05" id="year">
                            <option value="2015" selected>2015</option>
                          </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">Board</td>
                          <td align="left" valign="middle">:</td>
                          <td align="right" valign="middle"><select name="board" class="textfield05" id="board">
                          <option value=""selected>Select One</option>
						  <option value="barisal">Barisal</option>
						  <option value="chittagong">Chittagong</option>
						  <option value="comilla">Comilla</option>
                          <option value="dhaka">Dhaka</option>
						  <option value="dinajpur">Dinajpur</option>
						  <option value="jessore">Jessore</option>
                          <option value="rajshahi">Rajshahi</option>
                          <option value="sylhet">Sylhet</option>
                          <option value="madrasah">Madrasah</option>
						  <option value="tec">Technical</option>
						  <option value="dibs">DIBS(Dhaka)</option>
                          </select></td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">Roll</td>
                          <td align="left" valign="middle">:</td>
                          <td align="right" valign="middle">
						  <input name="roll" type="text" class="textfield06" id="roll" maxlength="6" onkeypress="return onlyNumbers()">
						  </td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
						<tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">4 + 8</td>
                          <td align="left" valign="middle">=</td>
                          <td align="right" valign="middle">
						 <input name="value_s" type="text" class="textfield06" id="value_s" maxlength="4" onkeypress="return onlyNumbers()">
						  </td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="right" valign="middle"><input type="reset" name="Reset" id="button" value="Reset">
                            <input type="submit" name="button2" id="button2" value="Submit"></td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                          <td align="right" valign="middle">&nbsp;</td>
                          <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                        </table>

                    </fieldset></td>
                    <td width="13%">&nbsp;</td>
                  </tr>
                </table>
              </form>
</body>
</html>