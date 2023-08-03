<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="./create.php">go to register</a>
        <table border 1px>
            <thead> 
                <tr>
                    <th>ID </th>
                    <th>NAME </th>
                    <th>CREATE</th>
                    <th>FORM </th>
                </tr>

            </thead>
            <tbody>
               <?php
            require_once('conect.php');
            $sql = "SELECT * FROM user ";
            $qqq = mysqli_query($db,$sql);

            $rows= mysqli_num_rows($qqq);

        while($rows=mysqli_fetch_assoc($qqq)){
             
            $times = date('d-m-y g:i',strtotime($rows['create']));
            echo" <tr>
            <td>{$rows['id']}</td>
            <td>{$rows['name']}</td>
            <td>$times</td>
            <td>
            <a href='./update.php?id={$rows['id']}'>update</a>

            <a href='./delect.php?id={$rows['id']}'>delect</a>

            </td>
             </tr> ";
        }
                  ?>

            </tbody>

        
        </table>
    </body>
    </html>
</body>
</html>


INSERT INTO user 