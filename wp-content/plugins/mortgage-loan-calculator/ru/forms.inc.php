<?php
if ($form_size == 'small'){
?>
<!-- Copyright 2008-2015 MLCALC.com --> <div id="MLCalcForm"> <!--[if lte IE 6]> <script type="text/javascript" src="<?php echo plugins_url("jquery.pngFix.js", dirname(__FILE__)); ?>"></script> <![endif]--> <map name="MLCalcFormMortgage" id="MLCalcFormMortgageMap"> <area shape="rect" coords="75,8,144,28" title="&#1050;&#1088;&#1077;&#1076;&#1080;&#1090;&#1085;&#1099;&#1081; &#1082;&#1072;&#1083;&#1100;&#1082;&#1091;&#1083;&#1103;&#1090;&#1086;&#1088;" onclick="javascript:jQuery('#MLCalcForm .panelItem, #mlcalcWidgetHolder .panelItem').toggle(); return false;" href="http://www.mlcalc.com/" alt="&#1050;&#1088;&#1077;&#1076;&#1080;&#1090;&#1085;&#1099;&#1081; &#1082;&#1072;&#1083;&#1100;&#1082;&#1091;&#1083;&#1103;&#1090;&#1086;&#1088;" /> <area shape="default" nohref="nohref" alt="" /> </map> <map name="MLCalcFormLoan" id="MLCalcFormLoanMap"> <area shape="rect" coords="6,7,74,28" title="&#1048;&#1087;&#1086;&#1090;&#1077;&#1095;&#1085;&#1099;&#1081; &#1082;&#1072;&#1083;&#1100;&#1082;&#1091;&#1083;&#1103;&#1090;&#1086;&#1088;" onclick="javascript:jQuery('#MLCalcForm .panelItem, #mlcalcWidgetHolder .panelItem').toggle(); return false;" href="http://www.mlcalc.com/" alt="&#1048;&#1087;&#1086;&#1090;&#1077;&#1095;&#1085;&#1099;&#1081; &#1082;&#1072;&#1083;&#1100;&#1082;&#1091;&#1083;&#1103;&#1090;&#1086;&#1088;" /> <area shape="default" nohref="nohref" alt="" /> </map> <table cellpadding="0" cellspacing="0" width="150"> <tr> <td colspan="3" class="zeroHeight" height="33"><a href="http://www.mlcalc.com/" title="Mortgage Calculator" onclick="return false;" style="padding:0;margin:0;line-height:0;height:0;"><img src="<?php echo plugins_url("ru/images/top-panel-mortgage-small.png", dirname(__FILE__)); ?>" alt="" width="150" height="33" usemap="#MLCalcFormMortgage" class="panelItem" <?php echo $display_mortgage; ?> /><img src="<?php echo plugins_url("ru/images/top-panel-loan-small.png", dirname(__FILE__)); ?>" alt="" width="150" height="33" usemap="#MLCalcFormLoan" class="panelItem" <?php echo $display_loan; ?> /><img src="<?php echo plugins_url("ru/images/top-panel-mortgage-only-small.png", dirname(__FILE__)); ?>" alt="&#1048;&#1087;&#1086;&#1090;&#1077;&#1082;&#1072;" width="150" height="33" <?php echo $display_mortgage_only; ?> /><img src="<?php echo plugins_url("ru/images/top-panel-loan-only-small.png", dirname(__FILE__)); ?>" alt="&#1050;&#1088;&#1077;&#1076;&#1080;&#1090;" width="150" height="33" <?php echo $display_loan_only; ?> /></a></td> </tr> <tr> <td style="background: url(<?php echo plugins_url("images/left-bg.png", dirname(__FILE__)); ?>) repeat-y" width="7"><table cellpadding="0" cellspacing="0" width="7"><tr><td></td></tr></table></td> <td class="formPlaceHolder" width="136"> <form action="http://www.mlcalc.com/" method="post" id="MLCalcFormMortgageForm" class="panelItem" <?php echo $display_mortgage_form; ?>> <input type="hidden" name="ml" value="mortgage" /> <input type="hidden" name="cl" value="true" /> <input type="hidden" name="wg" value="widget" /> <input type="hidden" name="cr" value="<?php echo $currency_code; ?>" /> <input type="hidden" name="wl" value="<?php echo $language; ?>" /> <?php echo $hidden; ?> <table cellpadding="0" cellspacing="0" width="136"> <tr><td width="10"></td><td align="center" width="116"> <table cellpadding="0" cellspacing="0" width="116" class="formFields"> <tr id="ma"> <td nowrap="nowrap"> <label for="ma">&#1062;&#1077;&#1085;&#1072; &#1085;&#1077;&#1076;&#1074;&#1080;&#1078;&#1080;&#1084;&#1086;&#1089;&#1090;&#1080;:</label><br /> <input type="text" name="ma" value="<?php echo $purchase_price; ?>" size="10" class="valid" /> <?php echo $currency_symbol; ?> </td> </tr> <tr id="dp" <?php if ($down_payment == 'null') echo 'style="display:none"'; ?>> <td nowrap="nowrap"> <label for="dp">&#1053;&#1072;&#1095;&#1072;&#1083;&#1100;&#1085;&#1099;&#1081; &#1074;&#1079;&#1085;&#1086;&#1089;:</label><br /> <input type="text" name="dp" value="<?php echo $down_payment; ?>" size="3" class="valid" /> % <span id="downPaymentValue"></span> </td> </tr> <tr id="mt"> <td nowrap="nowrap"> <label for="mt">&#1057;&#1088;&#1086;&#1082; &#1080;&#1087;&#1086;&#1090;&#1077;&#1082;&#1080;:</label><br /> <input type="text" name="mt" value="<?php echo $mortgage_term; ?>" size="3" class="valid" /> &#1083;&#1077;&#1090; </td> </tr> <tr id="mir"> <td nowrap="nowrap"> <label for="mir">&#1055;&#1088;&#1086;&#1094;&#1077;&#1085;&#1090;&#1085;&#1072;&#1103; &#1089;&#1090;&#1072;&#1074;&#1082;&#1072;:</label><br /> <input type="text" name="ir" value="<?php echo $interest_rate; ?>" size="5" class="valid" /> % </td> </tr> <tr id="pt" <?php if ($property_tax == 'null') echo 'style="display:none"'; ?>> <td nowrap="nowrap"> <label for="pt">&#1053;&#1072;&#1083;&#1086;&#1075;&#1080;:</label><br /> <input type="text" name="pt" value="<?php echo $property_tax; ?>" size="6" class="valid" /> <?php echo $currency_symbol; ?> &#1074; &#1075;&#1086;&#1076; </td> </tr> <tr id="pi" <?php if ($property_insurance == 'null') echo 'style="display:none"'; ?>> <td nowrap="nowrap"> <label for="pi">&#1057;&#1090;&#1088;&#1072;&#1093;&#1086;&#1074;&#1082;&#1072;:</label><br /> <input type="text" name="pi" value="<?php echo $property_insurance; ?>" size="6" class="valid" /> <?php echo $currency_symbol; ?> &#1074; &#1075;&#1086;&#1076; </td> </tr> <tr id="mi" <?php if ($pmi == 'null') echo 'style="display:none"'; ?>> <td nowrap="nowrap"> <label for="mi">PMI:</label><br /> <input type="text" name="mi" value="<?php echo $pmi; ?>" size="5" class="valid" /> % </td> </tr> <tr> <td nowrap="nowrap"> <label>&#1055;&#1077;&#1088;&#1074;&#1099;&#1081; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;:</label><br /> <select name="sm"> <option label="&#1071;&#1085;&#1074;" value="1">&#1071;&#1085;&#1074;</option> <option label="&#1060;&#1077;&#1074;" value="2">&#1060;&#1077;&#1074;</option> <option label="&#1052;&#1072;&#1088;" value="3">&#1052;&#1072;&#1088;</option> <option label="&#1040;&#1087;&#1088;" value="4">&#1040;&#1087;&#1088;</option> <option label="&#1052;&#1072;&#1081;" value="5">&#1052;&#1072;&#1081;</option> <option label="&#1048;&#1102;&#1085;" value="6">&#1048;&#1102;&#1085;</option> <option label="&#1048;&#1102;&#1083;" value="7">&#1048;&#1102;&#1083;</option> <option label="&#1040;&#1074;&#1075;" value="8">&#1040;&#1074;&#1075;</option> <option label="&#1057;&#1077;&#1085;" value="9">&#1057;&#1077;&#1085;</option> <option label="&#1054;&#1082;&#1090;" value="10">&#1054;&#1082;&#1090;</option> <option label="&#1053;&#1086;&#1103;" value="11" selected="selected">&#1053;&#1086;&#1103;</option> <option label="&#1044;&#1077;&#1082;" value="12">&#1044;&#1077;&#1082;</option> </select> <select name="sy"> <option label="2000" value="2000">2000</option> <option label="2001" value="2001">2001</option> <option label="2002" value="2002">2002</option> <option label="2003" value="2003">2003</option> <option label="2004" value="2004">2004</option> <option label="2005" value="2005">2005</option> <option label="2006" value="2006">2006</option> <option label="2007" value="2007">2007</option> <option label="2008" value="2008">2008</option> <option label="2009" value="2009">2009</option> <option label="2010" value="2010">2010</option> <option label="2011" value="2011">2011</option> <option label="2012" value="2012">2012</option> <option label="2013" value="2013">2013</option> <option label="2014" value="2014">2014</option> <option label="2015" value="2015" selected="selected">2015</option> <option label="2016" value="2016">2016</option> <option label="2017" value="2017">2017</option> <option label="2018" value="2018">2018</option> <option label="2019" value="2019">2019</option> <option label="2020" value="2020">2020</option> <option label="2021" value="2021">2021</option> <option label="2022" value="2022">2022</option> <option label="2023" value="2023">2023</option> <option label="2024" value="2024">2024</option> <option label="2025" value="2025">2025</option> <option label="2026" value="2026">2026</option> <option label="2027" value="2027">2027</option> <option label="2028" value="2028">2028</option> <option label="2029" value="2029">2029</option> <option label="2030" value="2030">2030</option> </select> </td> </tr> <tr id="mas" <?php echo $display_amortization; ?>> <td nowrap="nowrap"> <label>&#1040;&#1084;&#1086;&#1088;&#1090;&#1080;&#1079;&#1072;&#1094;&#1080;&#1103;:</label><br /> <input class="nobg" type="radio" name="as" value="year" id="mas_year" <?php echo $as_year; ?> /> <label for="mas_year">&#1087;&#1086;-&#1075;&#1086;&#1076;&#1072;&#1084;</label><br /> <input class="nobg" type="radio" name="as" value="month" id="mas_month" <?php echo $as_month; ?> /> <label for="mas_month">&#1087;&#1086;-&#1084;&#1077;&#1089;&#1103;&#1094;&#1072;&#1084;</label> </td> </tr> <tr> <td height="5"></td> </tr> <tr> <td colspan="2" class="centered"><input type="submit" value="&#1055;&#1086;&#1089;&#1095;&#1080;&#1090;&#1072;&#1090;&#1100;" class="sbmButton" /></td> </tr> </table> </td><td width="10"></td></tr> <tr><td height="5"></td></tr> </table> </form> <form action="http://www.mlcalc.com/" method="post" id="MLCalcFormLoanForm" class="panelItem" <?php echo $display_loan_form; ?>> <input type="hidden" name="ml" value="loan" /> <input type="hidden" name="cl" value="true" /> <input type="hidden" name="wg" value="widget" /> <input type="hidden" name="cr" value="<?php echo $currency_code; ?>" /> <input type="hidden" name="wl" value="<?php echo $language; ?>" /> <?php echo $hidden; ?> <table cellpadding="0" cellspacing="0" width="136"> <tr><td width="10"></td><td align="center" width="116"> <table cellpadding="0" cellspacing="0" width="116" class="formFields"> <tr id="la"> <td nowrap="nowrap"> <label for="la">&#1056;&#1072;&#1079;&#1084;&#1077;&#1088; &#1082;&#1088;&#1077;&#1076;&#1080;&#1090;&#1072;:</label><br /> <input type="text" name="la" value="<?php echo $loan_amount; ?>" size="10" class="valid" /> <?php echo $currency_symbol; ?> </td> </tr> <tr id="lt"> <td nowrap="nowrap"> <label for="lt">&#1057;&#1088;&#1086;&#1082; &#1082;&#1088;&#1077;&#1076;&#1080;&#1090;&#1072;:</label><br /> <input type="text" name="lt" value="<?php echo $loan_term; ?>" size="3" class="valid" /> &#1083;&#1077;&#1090; </td> </tr> <tr id="lir"> <td nowrap="nowrap"> <label for="lir">&#1055;&#1088;&#1086;&#1094;&#1077;&#1085;&#1090;&#1085;&#1072;&#1103; &#1089;&#1090;&#1072;&#1074;&#1082;&#1072;:</label><br /> <input type="text" name="ir" value="<?php echo $interest_rate; ?>" size="5" class="valid" /> % </td> </tr> <tr> <td nowrap="nowrap"> <label>&#1055;&#1077;&#1088;&#1074;&#1099;&#1081; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;:</label><br /> <select name="sm"> <option label="&#1071;&#1085;&#1074;" value="1">&#1071;&#1085;&#1074;</option> <option label="&#1060;&#1077;&#1074;" value="2">&#1060;&#1077;&#1074;</option> <option label="&#1052;&#1072;&#1088;" value="3">&#1052;&#1072;&#1088;</option> <option label="&#1040;&#1087;&#1088;" value="4">&#1040;&#1087;&#1088;</option> <option label="&#1052;&#1072;&#1081;" value="5">&#1052;&#1072;&#1081;</option> <option label="&#1048;&#1102;&#1085;" value="6">&#1048;&#1102;&#1085;</option> <option label="&#1048;&#1102;&#1083;" value="7">&#1048;&#1102;&#1083;</option> <option label="&#1040;&#1074;&#1075;" value="8">&#1040;&#1074;&#1075;</option> <option label="&#1057;&#1077;&#1085;" value="9">&#1057;&#1077;&#1085;</option> <option label="&#1054;&#1082;&#1090;" value="10">&#1054;&#1082;&#1090;</option> <option label="&#1053;&#1086;&#1103;" value="11" selected="selected">&#1053;&#1086;&#1103;</option> <option label="&#1044;&#1077;&#1082;" value="12">&#1044;&#1077;&#1082;</option> </select> <select name="sy"> <option label="2000" value="2000">2000</option> <option label="2001" value="2001">2001</option> <option label="2002" value="2002">2002</option> <option label="2003" value="2003">2003</option> <option label="2004" value="2004">2004</option> <option label="2005" value="2005">2005</option> <option label="2006" value="2006">2006</option> <option label="2007" value="2007">2007</option> <option label="2008" value="2008">2008</option> <option label="2009" value="2009">2009</option> <option label="2010" value="2010">2010</option> <option label="2011" value="2011">2011</option> <option label="2012" value="2012">2012</option> <option label="2013" value="2013">2013</option> <option label="2014" value="2014">2014</option> <option label="2015" value="2015" selected="selected">2015</option> <option label="2016" value="2016">2016</option> <option label="2017" value="2017">2017</option> <option label="2018" value="2018">2018</option> <option label="2019" value="2019">2019</option> <option label="2020" value="2020">2020</option> <option label="2021" value="2021">2021</option> <option label="2022" value="2022">2022</option> <option label="2023" value="2023">2023</option> <option label="2024" value="2024">2024</option> <option label="2025" value="2025">2025</option> <option label="2026" value="2026">2026</option> <option label="2027" value="2027">2027</option> <option label="2028" value="2028">2028</option> <option label="2029" value="2029">2029</option> <option label="2030" value="2030">2030</option> </select> </td> </tr> <tr id="las" <?php echo $display_amortization; ?>> <td nowrap="nowrap"> <label>&#1040;&#1084;&#1086;&#1088;&#1090;&#1080;&#1079;&#1072;&#1094;&#1080;&#1103;:</label><br /> <input class="nobg" type="radio" name="as" value="year" id="las_year" <?php echo $as_year; ?> /> <label for="las_year">&#1087;&#1086;-&#1075;&#1086;&#1076;&#1072;&#1084;</label><br /> <input class="nobg" type="radio" name="as" value="month" id="las_month" <?php echo $as_month; ?> /> <label for="las_month">&#1087;&#1086;-&#1084;&#1077;&#1089;&#1103;&#1094;&#1072;&#1084;</label> </td> </tr> <tr> <td height="5"></td> </tr> <tr> <td colspan="2" class="centered"><input type="submit" value="&#1055;&#1086;&#1089;&#1095;&#1080;&#1090;&#1072;&#1090;&#1100;" class="sbmButton" /></td> </tr> </table> </td><td width="10"></td></tr> <tr><td height="5"></td></tr> </table> </form> </td> <td style="background: url(<?php echo plugins_url("images/right-bg.png", dirname(__FILE__)); ?>) repeat-y" width="7"><table cellpadding="0" cellspacing="0" width="7"><tr><td></td></tr></table></td> </tr> <tr> <td colspan="3" class="zeroHeight" height="13"><img src="<?php echo plugins_url("images/bottom-small.png", dirname(__FILE__)); ?>" width="150" height="13" alt="" /></td> </tr> </table> </div>
<?php
}else{
?>
<!-- Copyright 2008-2015 MLCALC.com --> <div id="MLCalcForm"> <!--[if lte IE 6]> <script type="text/javascript" src="<?php echo plugins_url("jquery.pngFix.js", dirname(__FILE__)); ?>"></script> <![endif]--> <map name="MLCalcFormMortgage" id="MLCalcFormMortgageMap"> <area shape="rect" coords="150,10,293,36" title="&#1050;&#1088;&#1077;&#1076;&#1080;&#1090;&#1085;&#1099;&#1081; &#1082;&#1072;&#1083;&#1100;&#1082;&#1091;&#1083;&#1103;&#1090;&#1086;&#1088;" onclick="javascript:jQuery('#MLCalcForm .panelItem, #mlcalcWidgetHolder .panelItem').toggle(); return false;" href="http://www.mlcalc.com/" alt="&#1050;&#1088;&#1077;&#1076;&#1080;&#1090;&#1085;&#1099;&#1081; &#1082;&#1072;&#1083;&#1100;&#1082;&#1091;&#1083;&#1103;&#1090;&#1086;&#1088;" /> <area shape="default" nohref="nohref" alt="" /> </map> <map name="MLCalcFormLoan" id="MLCalcFormLoanMap"> <area shape="rect" coords="6,10,149,36" title="&#1048;&#1087;&#1086;&#1090;&#1077;&#1095;&#1085;&#1099;&#1081; &#1082;&#1072;&#1083;&#1100;&#1082;&#1091;&#1083;&#1103;&#1090;&#1086;&#1088;" onclick="javascript:jQuery('#MLCalcForm .panelItem, #mlcalcWidgetHolder .panelItem').toggle(); return false;" href="http://www.mlcalc.com/" alt="&#1048;&#1087;&#1086;&#1090;&#1077;&#1095;&#1085;&#1099;&#1081; &#1082;&#1072;&#1083;&#1100;&#1082;&#1091;&#1083;&#1103;&#1090;&#1086;&#1088;" /> <area shape="default" nohref="nohref" alt="" /> </map> <form action="http://www.mlcalc.com/mortgage-rates/" method="post" id="MLCalcRatesFormTrendCR" target="MLCalcRatesFrame"><input type="hidden" name="state" value="XX" /><input type="hidden" name="wg" value="ig" /></form> <table cellpadding="0" cellspacing="0" width="300"> <tr> <td colspan="3" class="zeroHeight" height="44"><a href="http://www.mlcalc.com/" title="Loan Calculator" onclick="return false;" style="padding:0;margin:0;line-height:0;height:0;"><img src="<?php echo plugins_url("ru/images/top-panel-mortgage.png", dirname(__FILE__)); ?>" alt="" width="300" height="44" usemap="#MLCalcFormMortgage" class="panelItem" <?php echo $display_mortgage; ?> /><img src="<?php echo plugins_url("ru/images/top-panel-loan.png", dirname(__FILE__)); ?>" alt="" width="300" height="44" usemap="#MLCalcFormLoan" class="panelItem" <?php echo $display_loan; ?> /><img src="<?php echo plugins_url("ru/images/top-panel-mortgage-only.png", dirname(__FILE__)); ?>" alt="&#1048;&#1087;&#1086;&#1090;&#1077;&#1082;&#1072;" width="300" height="44" <?php echo $display_mortgage_only; ?> /><img src="<?php echo plugins_url("ru/images/top-panel-loan-only.png", dirname(__FILE__)); ?>" alt="&#1050;&#1088;&#1077;&#1076;&#1080;&#1090;" width="300" height="44" <?php echo $display_loan_only; ?> /></a></td> </tr> <tr> <td style="background: url(<?php echo plugins_url("images/left-bg.png", dirname(__FILE__)); ?>) repeat-y" width="7"></td> <td class="formPlaceHolder" width="286"> <form action="http://www.mlcalc.com/" method="post" id="MLCalcFormMortgageForm" class="panelItem" <?php echo $display_mortgage_form; ?>> <input type="hidden" name="ml" value="mortgage" /> <input type="hidden" name="cl" value="true" /> <input type="hidden" name="wg" value="widget" /> <input type="hidden" name="cr" value="<?php echo $currency_code; ?>" /> <input type="hidden" name="wl" value="<?php echo $language; ?>" /> <?php echo $hidden; ?> <table cellpadding="0" cellspacing="0" width="100%"> <tr><td height="10"></td></tr> <tr><td width="15"></td><td align="center"> <table cellpadding="0" cellspacing="0" width="100%" class="formFields"> <tr id="ma"> <td class="right"><label for="ma">&#1062;&#1077;&#1085;&#1072; &#1085;&#1077;&#1076;&#1074;&#1080;&#1078;&#1080;&#1084;&#1086;&#1089;&#1090;&#1080;:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="ma" value="<?php echo $purchase_price; ?>" size="10" class="valid" /> <?php echo $currency_symbol; ?></td> </tr> <tr id="dp" <?php if ($down_payment == 'null') echo 'style="display:none"'; ?>> <td class="right"><label for="dp">&#1053;&#1072;&#1095;&#1072;&#1083;&#1100;&#1085;&#1099;&#1081; &#1074;&#1079;&#1085;&#1086;&#1089;:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="dp" value="<?php echo $down_payment; ?>" size="3" class="valid" /> % <span id="downPaymentValue"></span></td> </tr> <tr id="mt"> <td class="right"><label for="mt">&#1057;&#1088;&#1086;&#1082; &#1080;&#1087;&#1086;&#1090;&#1077;&#1082;&#1080;:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="mt" value="<?php echo $mortgage_term; ?>" size="3" class="valid" /> &#1083;&#1077;&#1090;</td> </tr> <tr id="mir"> <td class="right"><label for="mir">&#1055;&#1088;&#1086;&#1094;&#1077;&#1085;&#1090;&#1085;&#1072;&#1103; &#1089;&#1090;&#1072;&#1074;&#1082;&#1072;:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="ir" value="<?php echo $interest_rate; ?>" size="5" class="valid" /> %</td> </tr> <tr id="pt" <?php if ($property_tax == 'null') echo 'style="display:none"'; ?>> <td class="right"><label for="pt">&#1053;&#1072;&#1083;&#1086;&#1075;&#1080;:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="pt" value="<?php echo $property_tax; ?>" size="6" class="valid" /> <?php echo $currency_symbol; ?> &#1074; &#1075;&#1086;&#1076;</td> </tr> <tr id="pi" <?php if ($property_insurance == 'null') echo 'style="display:none"'; ?>> <td class="right"><label for="pi">&#1057;&#1090;&#1088;&#1072;&#1093;&#1086;&#1074;&#1082;&#1072;:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="pi" value="<?php echo $property_insurance; ?>" size="6" class="valid" /> <?php echo $currency_symbol; ?> &#1074; &#1075;&#1086;&#1076;</td> </tr> <tr id="mi" <?php if ($pmi == 'null') echo 'style="display:none"'; ?>> <td class="right"><label for="mi">PMI:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="mi" value="<?php echo $pmi; ?>" size="5" class="valid" /> %</td> </tr> <tr> <td class="right"><label>&#1055;&#1077;&#1088;&#1074;&#1099;&#1081; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;:</label></td> <td nowrap="nowrap" align="left"><select name="sm"> <option label="&#1071;&#1085;&#1074;" value="1">&#1071;&#1085;&#1074;</option> <option label="&#1060;&#1077;&#1074;" value="2">&#1060;&#1077;&#1074;</option> <option label="&#1052;&#1072;&#1088;" value="3">&#1052;&#1072;&#1088;</option> <option label="&#1040;&#1087;&#1088;" value="4">&#1040;&#1087;&#1088;</option> <option label="&#1052;&#1072;&#1081;" value="5">&#1052;&#1072;&#1081;</option> <option label="&#1048;&#1102;&#1085;" value="6">&#1048;&#1102;&#1085;</option> <option label="&#1048;&#1102;&#1083;" value="7">&#1048;&#1102;&#1083;</option> <option label="&#1040;&#1074;&#1075;" value="8">&#1040;&#1074;&#1075;</option> <option label="&#1057;&#1077;&#1085;" value="9">&#1057;&#1077;&#1085;</option> <option label="&#1054;&#1082;&#1090;" value="10">&#1054;&#1082;&#1090;</option> <option label="&#1053;&#1086;&#1103;" value="11" selected="selected">&#1053;&#1086;&#1103;</option> <option label="&#1044;&#1077;&#1082;" value="12">&#1044;&#1077;&#1082;</option> </select> <select name="sy"> <option label="2000" value="2000">2000</option> <option label="2001" value="2001">2001</option> <option label="2002" value="2002">2002</option> <option label="2003" value="2003">2003</option> <option label="2004" value="2004">2004</option> <option label="2005" value="2005">2005</option> <option label="2006" value="2006">2006</option> <option label="2007" value="2007">2007</option> <option label="2008" value="2008">2008</option> <option label="2009" value="2009">2009</option> <option label="2010" value="2010">2010</option> <option label="2011" value="2011">2011</option> <option label="2012" value="2012">2012</option> <option label="2013" value="2013">2013</option> <option label="2014" value="2014">2014</option> <option label="2015" value="2015" selected="selected">2015</option> <option label="2016" value="2016">2016</option> <option label="2017" value="2017">2017</option> <option label="2018" value="2018">2018</option> <option label="2019" value="2019">2019</option> <option label="2020" value="2020">2020</option> <option label="2021" value="2021">2021</option> <option label="2022" value="2022">2022</option> <option label="2023" value="2023">2023</option> <option label="2024" value="2024">2024</option> <option label="2025" value="2025">2025</option> <option label="2026" value="2026">2026</option> <option label="2027" value="2027">2027</option> <option label="2028" value="2028">2028</option> <option label="2029" value="2029">2029</option> <option label="2030" value="2030">2030</option> </select> </td> </tr> <tr id="mas" <?php echo $display_amortization; ?>> <td class="right"><label>&#1040;&#1084;&#1086;&#1088;&#1090;&#1080;&#1079;&#1072;&#1094;&#1080;&#1103;:</label></td> <td nowrap="nowrap" align="left"> <input class="nobg" type="radio" name="as" value="year" id="mas_year" <?php echo $as_year; ?> /> <label for="mas_year">&#1087;&#1086;-&#1075;&#1086;&#1076;&#1072;&#1084;</label><br /> <input class="nobg" type="radio" name="as" value="month" id="mas_month" <?php echo $as_month; ?> /> <label for="mas_month">&#1087;&#1086;-&#1084;&#1077;&#1089;&#1103;&#1094;&#1072;&#1084;</label> </td> </tr> <tr> <td height="10"></td> </tr> <tr> <td colspan="2" class="center"><input type="submit" value="&#1055;&#1086;&#1089;&#1095;&#1080;&#1090;&#1072;&#1090;&#1100;" class="sbmButton" /></td> </tr> </table> </td><td width="15"></td></tr> <tr><td height="10"></td></tr> </table> </form> <form action="http://www.mlcalc.com/" method="post" id="MLCalcFormLoanForm" class="panelItem" <?php echo $display_loan_form; ?>> <input type="hidden" name="ml" value="loan" /> <input type="hidden" name="cl" value="true" /> <input type="hidden" name="wg" value="widget" /> <input type="hidden" name="cr" value="<?php echo $currency_code; ?>" /> <input type="hidden" name="wl" value="<?php echo $language; ?>" /> <?php echo $hidden; ?> <table cellpadding="0" cellspacing="0" width="100%"> <tr><td height="10"></td></tr> <tr><td width="15"></td><td align="center"> <table cellpadding="0" cellspacing="0" class="formFields"> <tr id="la"> <td class="right"><label for="la">&#1056;&#1072;&#1079;&#1084;&#1077;&#1088; &#1082;&#1088;&#1077;&#1076;&#1080;&#1090;&#1072;:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="la" value="<?php echo $loan_amount; ?>" size="10" class="valid" /> <?php echo $currency_symbol; ?></td> </tr> <tr id="lt"> <td class="right"><label for="lt">&#1057;&#1088;&#1086;&#1082; &#1082;&#1088;&#1077;&#1076;&#1080;&#1090;&#1072;:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="lt" value="<?php echo $loan_term; ?>" size="3" class="valid" /> &#1083;&#1077;&#1090;</td> </tr> <tr id="lir"> <td class="right"><label for="lir">&#1055;&#1088;&#1086;&#1094;&#1077;&#1085;&#1090;&#1085;&#1072;&#1103; &#1089;&#1090;&#1072;&#1074;&#1082;&#1072;:</label></td> <td nowrap="nowrap" align="left"><input type="text" name="ir" value="<?php echo $interest_rate; ?>" size="5" class="valid" /> %</td> </tr> <tr> <td class="right"><label>&#1055;&#1077;&#1088;&#1074;&#1099;&#1081; &#1087;&#1083;&#1072;&#1090;&#1077;&#1078;:</label></td> <td nowrap="nowrap" align="left"><select name="sm"> <option label="&#1071;&#1085;&#1074;" value="1">&#1071;&#1085;&#1074;</option> <option label="&#1060;&#1077;&#1074;" value="2">&#1060;&#1077;&#1074;</option> <option label="&#1052;&#1072;&#1088;" value="3">&#1052;&#1072;&#1088;</option> <option label="&#1040;&#1087;&#1088;" value="4">&#1040;&#1087;&#1088;</option> <option label="&#1052;&#1072;&#1081;" value="5">&#1052;&#1072;&#1081;</option> <option label="&#1048;&#1102;&#1085;" value="6">&#1048;&#1102;&#1085;</option> <option label="&#1048;&#1102;&#1083;" value="7">&#1048;&#1102;&#1083;</option> <option label="&#1040;&#1074;&#1075;" value="8">&#1040;&#1074;&#1075;</option> <option label="&#1057;&#1077;&#1085;" value="9">&#1057;&#1077;&#1085;</option> <option label="&#1054;&#1082;&#1090;" value="10">&#1054;&#1082;&#1090;</option> <option label="&#1053;&#1086;&#1103;" value="11" selected="selected">&#1053;&#1086;&#1103;</option> <option label="&#1044;&#1077;&#1082;" value="12">&#1044;&#1077;&#1082;</option> </select> <select name="sy"> <option label="2000" value="2000">2000</option> <option label="2001" value="2001">2001</option> <option label="2002" value="2002">2002</option> <option label="2003" value="2003">2003</option> <option label="2004" value="2004">2004</option> <option label="2005" value="2005">2005</option> <option label="2006" value="2006">2006</option> <option label="2007" value="2007">2007</option> <option label="2008" value="2008">2008</option> <option label="2009" value="2009">2009</option> <option label="2010" value="2010">2010</option> <option label="2011" value="2011">2011</option> <option label="2012" value="2012">2012</option> <option label="2013" value="2013">2013</option> <option label="2014" value="2014">2014</option> <option label="2015" value="2015" selected="selected">2015</option> <option label="2016" value="2016">2016</option> <option label="2017" value="2017">2017</option> <option label="2018" value="2018">2018</option> <option label="2019" value="2019">2019</option> <option label="2020" value="2020">2020</option> <option label="2021" value="2021">2021</option> <option label="2022" value="2022">2022</option> <option label="2023" value="2023">2023</option> <option label="2024" value="2024">2024</option> <option label="2025" value="2025">2025</option> <option label="2026" value="2026">2026</option> <option label="2027" value="2027">2027</option> <option label="2028" value="2028">2028</option> <option label="2029" value="2029">2029</option> <option label="2030" value="2030">2030</option> </select> </td> </tr> <tr id="las" <?php echo $display_amortization; ?>> <td class="right"><label>&#1040;&#1084;&#1086;&#1088;&#1090;&#1080;&#1079;&#1072;&#1094;&#1080;&#1103;:</label></td> <td nowrap="nowrap" align="left"> <input class="nobg" type="radio" name="as" value="year" id="las_year" <?php echo $as_year; ?> /> <label for="las_year">&#1087;&#1086;-&#1075;&#1086;&#1076;&#1072;&#1084;</label><br /> <input class="nobg" type="radio" name="as" value="month" id="las_month" <?php echo $as_month; ?> /> <label for="las_month">&#1087;&#1086;-&#1084;&#1077;&#1089;&#1103;&#1094;&#1072;&#1084;</label> </td> </tr> <tr> <td height="10"></td> </tr> <tr> <td colspan="2" class="center"><input type="submit" value="&#1055;&#1086;&#1089;&#1095;&#1080;&#1090;&#1072;&#1090;&#1100;" class="sbmButton" /></td> </tr> </table> </td><td width="15"></td></tr> <tr><td height="10"></td></tr> </table> </form> </td> <td style="background: url(<?php echo plugins_url("images/right-bg.png", dirname(__FILE__)); ?>) repeat-y" width="7"></td> </tr> <tr> <td colspan="3" class="zeroHeight" height="13"><img src="<?php echo plugins_url("images/bottom.png", dirname(__FILE__)); ?>" width="300" height="13" alt="" /></td> </tr> </table> </div>
<?php
};
?>