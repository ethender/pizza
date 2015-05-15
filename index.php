<html>
    <head>
        <title>PizzaML</title>
    <head>
    <body>
        <form action="form.php" method="get">
            <table align="center" border=1>
                <tr>
                    <th>Pizzas</th>
                    <th>small</th>
                    <th>large</th>
                </tr>

        <!-- Pizzas category -->
            <?
                $dom = simplexml_load_file("menu.xml");

                foreach($dom -> xpath("category[@name='Pizzas']/item") as $item){
                            print "<tr>";
                            print"<td>";
                            print $item["name"];
                            print"</td>";
                            print"<td>";
                            print "<input type=radio value=$item[small]>"."small ";
                            print "</td>";
                            print "<td>";
                            print "<input type=radio value=$item[small]>"."large ";
                            print "</td>";
                            print "</tr>";
    
                }
                            print "<tr>";
                            print "<td>";
                            print "<input type=submit value=submit>";
                            print "</td>";
                            print "</tr>";
            ?>
            </table>
        </form>
    </body>
</html>
