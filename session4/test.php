<html>
    <head>

    </head>
    <body>
    <?php
if(isset($_POST['ok_num']))
{
            $num=$_POST['txtnum'];
            echo "<hr />";
            echo "Ban dang chon $num file upload<br />";
            echo "<form action='doupload.php' method='post' enctype='multipart/form-data'>";
            for($i=1; $i <= $num; $i++)
            {
                 echo "<input type='file' name='img[]' /><br />";
            }
            echo "<input type='hidden' name='file' value='".$num."' />";
            echo "<input type='submit' name='ok_upload' value='Upload' />";
            echo "</form>";
}
?>
        <form action="test.php" method="post" enctype='multipart/form-data'>
            Enter your Image: <input type="text" name="txtnum" value="" size="10" />
            <input type="submit" name="ok_num" value="Accept" />
            </form>
    </body>
</html>