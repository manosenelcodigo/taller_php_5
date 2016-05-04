<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>#manosenelcódigo</title>    
    </head>
    <body>
        
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>E-Mail</th>
            </thead>
            <tbody>
                <?php
                for($i=0;$i<10;$i++)
                {
                ?>
                <!--inicio-->
                <tr>
                    <td><?php echo $i?></td>
                    <td>César Cancino</td>
                    <td>yo@cesarcancin.com</td>
                </tr>
                <!--/fin-->
                <?php
                }
                ?>
            </tbody>
        </table>
        
    </body>
</html>
