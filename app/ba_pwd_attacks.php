<?php

/*

bWAPP, or a buggy web application, is a free and open source deliberately insecure web application.
It helps security enthusiasts, developers and students to discover and to prevent web vulnerabilities.
bWAPP covers all major known web vulnerabilities, including all risks from the OWASP Top 10 project!
It is for security-testing and educational purposes only.

Enjoy!

Malik Mesellem
Twitter: @MME_IT

bWAPP is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License (http://creativecommons.org/licenses/by-nc-nd/4.0/). Copyright © 2014 MME BVBA. All rights reserved.

*/

include("security.php");
include("security_level_check.php");

switch($_COOKIE["security_level"])
{

    case "0" :

        header("Location: ba_pwd_attacks_1.php");

        break;

    case "1" :

        header("Location: ba_pwd_attacks_2.php");

        break;

    case "2" :

        header("Location: ba_pwd_attacks_4.php");

        break;

    default :

        header("Location: ba_pwd_attacks_1.php");

        break;

}

?>
