<!DOCTYPE html>

<html>
    <head>
        <title>PHP Пример 1</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        echo "<h2>Hello Dear <strong>Teachers</strong>!</h2>";
        $int = 1234;
        $b = TRUE;
        $f = 1.5;
        $s = "String";
        $ar = array();
        $ar[]=123;
/*
        echo "valiable int :".gettype($int)."<br/>";
        echo "valiable b :".gettype($b)."<br/>";
        echo "valiable f :".gettype($f)."<br/>";
        echo "valiable s :".gettype($s)."<br/>";
        echo "valiable ar :".gettype($ar)."<br/>";
 
 */
        ?>
        <table class="table table-hover">
            <thead>
            <th>Variable name</th>
            <th>Value</th>
            <th>Type</th>
            </thead>
            <tbody>
                <tr>
                    <td>$int</td>
                    <td><?= $int; ?></td>
                    <td><?php echo gettype($int);?></td>
                </tr>
                <tr>
                    <td>$b</td>
                    <td><?= $b; ?></td>
                    <td><?php echo gettype($b);?></td>
                </tr>
                <tr>
                    <td>$f</td>
                    <td><?= $f; ?></td>
                    <td><?php echo gettype($f);?></td>
                </tr>
                <tr>
                    <td>$s</td>
                    <td><?= $s; ?></td>
                    <td><?php echo gettype($s);?></td>
                </tr>
                <tr>
                    <td>$ar</td>
                    <td><?= $ar[0]; ?></td>
                    <td><?php echo gettype($ar);?></td>
                </tr>
            </tbody>
        </table>
        <p>This is pharagrath</p>
    </body>
</html>