<html>
    <head>
        <title> Palindrome String </title>
</head>
<body>

    <?php
        function Palindrome($string)
        {
            if(strrev($string)==$string)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }

        $original="Sister";
        if(Palindrome($original))
        {
            echo "Palindrome";
        }
        else
        {
            echo "Not a Palindrome";
        }
        ?>
</body>
    </html>