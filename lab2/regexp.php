<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:21 PM
 */?>
<!DOCTYPE html>
<html>
<head>
    <title>Regular Expression Evaluator</title>
    <link rel="stylesheet" type="text/css" href="regexp.css" />
    <script type="text/javascript">
        function checkpattern ( pat, str )  {
            if (pat.test(str)) alert ("Matched!");
            else               alert ("No match");
        }
    </script>
</head>

<body>
<p class="mytitle">Pattern Matching</p>

<div class="aligntable">
    <form name="myform" action="" method="post" >
        <table>
            <thead>
            <tr>  <th>Pattern</th>
                <th>String</th>
                <th>&nbsp;</th>
                <th>Explanation</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>/abc/</td>
                <td><input type="text" name="first" /></td>
                <td><input type="button" value="Check"
                           onclick='checkpattern (/abc/, myform.first.value );' />
                </td>
                <td>Look for these characters anywhere in string</td>
            </tr>

            <tr>
                <td>/[abc]/</td>
                <td><input type="test" name="second" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern(/[abc]/,myform.second.value);" />
                </td>
                <td>Match one of this set of characters</td>
            </tr>

            <tr>
                <td>/[1-9]/</td>
                <td><input type="test" name="third" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern(/[1-9]/,myform.third.value);" />
                </td>
                <td>Match this range of digits</td>
            </tr>

            <tr>
                <td>/\d/</td>
                <td><input type="test" name="seventh" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern (/\d/, myform.seventh.value );"/>
                </td>
                <td>Match any digits</td>
            </tr>

            <tr>
                <td>/[x-z]/</td>
                <td><input type="test" name="fourth" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern(/[x-z]/,myform.fourth.value);" />
                </td>
                <td>Match this range of lower case letters</td>
            </tr>

            <tr>
                <td>/[^1-9]/</td>
                <td><input type="test" name="fifth" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern(/[^1-9]/,myform.fifth.value);" />
                </td>
                <td>Matches anything not in this range of digits</td>
            </tr>

            <tr>
                <td>/[0-9]{3}-[0-9]{3}-[0-9]{4}/</td>
                <td><input type="test" name="sixth" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern (/[0-9]{3}-[0-9]{3}-[0-9]{4}/,
                  myform.sixth.value );" />
                </td>
                <td>Match phone number: 999-999-9999</td>
            </tr>

            <tr>
                <td>/.a./</td>
                <td><input type="test" name="eight" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern (/.a./,
			myform.eight.value );" />
                </td>
                <td>Match any "a" any</td>
            </tr>

            <tr>
                <td>/a | e/</td>
                <td><input type="test" name="nine" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern (/a|e/,
			myform.nine.value );" />
                </td>
                <td>Match either a or e</td>
            </tr>

            <tr>
                <td>/^X/</td>
                <td><input type="test" name="ten" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern (/^X/,
			myform.ten.value );" />
                </td>
                <td>Starts with X</td>
            </tr>

            <tr>
                <td>/X$/</td>
                <td><input type="test" name="eleven" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern (/X$/,
			myform.eleven.value );" />
                </td>
                <td>Ends with X</td>
            </tr>

            <tr>
                <td>/ca?t/</td>
                <td><input type="test" name="twelve" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern (/ca?t/,
			myform.twelve.value );" />
                </td>
                <td>letter a is optional</td>
            </tr>

            <tr>
                <td>/mo*n/</td>
                <td><input type="test" name="thirteen" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern(/mo*n/,
			myform.thirteen.value );" />
                </td>
                <td>Match token 0 or more times</td>
            </tr>

            <tr>
                <td>/mo+n/</td>
                <td><input type="test" name="fourteen" /></td>
                <td><input type="button" value="Check"
                           onclick="checkpattern (/mo+n/,
			myform.fourteen.value );" />
                </td>
                <td>Match token 1 or more times</td>
            </tr>
            </tbody>

        </table>
    </form>
</div>
</body>
</html>
