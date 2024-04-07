<html>
    <hrad>
    <title>Program of substring</title>
    <body>
        <form method="post">
            Enter the String:<br>
            <input type="text" name="text1" id="no">
            <br>
            <input type="text" name="text2" id="no">
            Enter the character to search in the string:<br>
            <input type="submit"/>
</form>
<?php
if($_POST)
{
    //getting value from input text box'text'
    $ipstr=$_POST["text1"];
    $search=$_POST["text2"];
    $count=0;
    for($i="0";$i<=strlen($ipstr);$i++)
    {
        if(substr($ipstr,$i,1)==$search)
        {
            $count=$count+1;
        }
    }
    echo "The character $search appears $count times in the input string $ipstr";
    echo $count."\n";
}
?>
</body>
    </html>