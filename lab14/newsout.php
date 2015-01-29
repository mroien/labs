<html>
<head><title> Showing News on the Screen </title></head>
<body>
<h1> News for ICS 325 Class </h1>
The news can be ordered  by
<a href="newsout.php?orderby=date">Date</a>,
<a href="newsout.php?orderby=title">Title</a>
or by
<a href="newsout.php?orderby=author">Author</a>
<p>
<form action="<? $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" name="submit" value="Submit">
</form>
<table border="1" cellpadding="4">

<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 1/29/2015
 * Time: 2:23 PM
 */
if (isset($_SERVER['QUERY_STRING']))  {
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str ( $qstr );
}
if (isset($_POST['submit']) || isset($orderby)) {
    if (!isset($orderby)) $orderby = "";
    $dbConNum = new mysqli("localhost","root","root","ics325labs");
    if (mysqli_connect_errno())   {
        echo("<p>Error creating Database Connection</p>");
        exit;
    }
    if ( $orderby == 'date' ):
        $sql = "select * from mynews order by date";
    elseif ( $orderby == 'title' ):
        $sql = "select * from mynews order by title";
    elseif ( $orderby == 'author' ):
        $sql = "select * from mynews order by author_name";
    else:
        $sql = "select * from mynews";
    endif;
    $result = $dbConNum->query($sql);
    if (!$result) {
        echo("<p>Error performing query</p>");
        exit();
    }
    $dbConNum->close();
    while ( $row = $result->fetch_assoc() ) {
        $row['title'] = stripslashes($row['title']);
        $row['author_email'] = stripslashes($row['author_email']);
        $row['author_name'] = stripslashes($row['author_name']);
        $row['website'] = stripslashes($row['website']);
        $row['body'] = stripslashes ($row['body']);
        ?>
        <tr>
            <td bgcolor=#003399>
                <b><font color=white><?=$row["title"]?></font></b>
            </td>
        </tr>
        <tr>
            <td>
                By: <?=$row["author_name"]?>
                <a href="mailto:<?=$row["author_email"]?>"><?=$row["author_email"]?></a>
                <br /> Posted on: <?=$row["date"]?>
                <br /> Website: <a href="<?=$row["website"]?>"><?=$row["website"]?></a>
                <hr /><?= $row["body"]?>
            </td>
        </tr>
    <?php
    }
}
?>
</table>
</body>
</html>
