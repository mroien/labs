<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/28/2015
 * Time: 7:11 PM
 */?>
<html>
<head>
    <title>Inline Error Messages</title>
    <!-- Verifying a social security number  -->
</head>
<script type="text/javascript">
    function checkSSN() {
        var goodSSN=true;
        var goodChars="0123456789-";
        var SSN = document.SSNform.inSSN.value;

        // check length
        if ( SSN.length != 11 ) {
            document.getElementById('errorDiv').innerHTML =
                "Error: Expecting 9 digits and 2 dashes";
            document.forms["SSNform"]["inSSN"].focus();
            return false;
        }

        else  {  // look for numbers and dashes only
            for (var i = 0 ; i < 11 ; i ++) {
                var myChar = SSN.charAt(i);
                if (goodChars.indexOf(myChar) == -1)   {
                    document.getElementById('errorDiv').innerHTML =
                        "An invalid character was found in your SSN: "+myChar;
                    document.forms["SSNform"]["inSSN"].focus();
                    return false ;
                }
            }

            // check for dashes in the correct position
            var j = SSN.indexOf("-", 0);
            if ( j < 1 ) {
                document.getElementById('errorDiv').innerHTML =
                    "Error: Missing '-'";
                document.forms["SSNform"]["inSSN"].focus();
                return false;
            }  else  {  // 3 digits
                var set1=SSN.substring(0,j);
                if (set1.length != 3){
                    document.getElementById('errorDiv').innerHTML =
                        "Error: Expecting 3 digits before dash";
                    document.forms["SSNform"]["inSSN"].focus();
                    return false;
                }  else  {  // 2 digits
                    var j2 = SSN.indexOf("-", j+1);
                    var set2=SSN.substring(j+1,j2);
                    if (set2.length != 2)   {
                        document.getElementById('errorDiv').innerHTML =
                            "Error: Expecting 2 digits between dashes";
                        document.forms["SSNform"]["inSSN"].focus();
                        return false;
                    }  else  {  // 4 digits
                        var set3=SSN.substring(j2+1,SSN.length);
                        if (set3.length != 4)   {
                            document.getElementById('errorDiv').innerHTML=
                                "Error: Expecting 4 digits after last dash";
                            document.forms["SSNform"]["inSSN"].focus();
                            return false;
                        }  else  {  // OK
                            return true;
                        }
                    }
                }
            }
        }
    }
</script>
<noscript>JavaScript has not been enabled</noscript>
<body>
<form name="SSNform" method="post" onsubmit="return checkSSN();"
      action="moveon.php">
    Enter your Social Security Number:
    <input type="text" size="30" name="inSSN" id="inSSN">
    <input type="submit" value="Verify" >
    <span id='errorDiv'></span>
</form>
</body>
</html>

Create another PHP file moveon.php
<html>
<body>
Correct
</body>
</html>

