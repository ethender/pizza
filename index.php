<html>
    <head>
        <title>PizzaML</title>
    <head>
    <body background="#D0D0D0">
        <form action="index.php" method="get">
            <table align="center" border=1>
                <tr>
                    <th>Pizzas</th>
                    <th>small</th>
                    <th>large</th>
                </tr>

        <!-- Pizzas category -->
            <?
                $dom = simplexml_load_file("menu.xml");

                    //<!-- pizzas category -->
                foreach($dom -> xpath("category[@name='Pizzas']/item") as $item){
                            print "<tr>";
                            print"<td>";
                            print $item["name"];
                            print"</td>";
                            print"<td>";
                            print "<input type=checkbox value=$item[small]>".$item["small"];
                            print "</td>";
                            print "<td>";
                            print "<input type=checkbox value=$item[small]>".$item["large"];
                            print "</td>";
                            print "</tr>";
    
                }

                // <!-- special catgory  -->

                        print"<tr> <th>Special Pizza </th> <th> small </th> <th> large </th> </tr>";

                        foreach($dom -> xpath("category[@name='SpecialityPizzas']/item") as $item){
                                print "<tr>";
                                print"<td>";
                                print $item["name"];
                                print"</td>";
                                print"<td>";
                                print "<input type=checkbox value=$item[small]>".$item["small"];
                                print "</td>";
                                print "<td>";
                                print "<input type=checkbox value=$item[small]>".$item["large"];
                                print "</td>";
                                print "</tr>";
    
                        }
            //<!-- salads category -->

                print"<tr> <th>Special Pizza </th> <th> small </th> <th> large </th> </tr>";

                foreach($dom -> xpath("category[@name='Salads']/item") as $item){
                        print "<tr>";
                        print"<td>";
                        print $item["name"];
                        print"</td>";
                        print"<td>";
                        print "<input type=checkbox value=$item[small]>".$item["small"];
                        print "</td>";
                        print "<td>";
                        print "<input type=checkbox value=$item[small]>".$item["large"];
                        print "</td>";
                        print "</tr>";
    
                }
        //<!-- Grinders -->

            print"<tr> <th>Special Pizza </th> <th> small </th> <th> large </th> </tr>";

            foreach($dom -> xpath("category[@name='Grinders']/item") as $item){
                    print "<tr>";
                    print"<td>";
                    print $item["name"];
                    print"</td>";
                    print"<td>";
                    print "<input type=checkbox value=$item[small]>".$item["small"];
                    print "</td>";
                    print "<td>";
                    print "<input type=checkbox value=$item[small]>".$item["large"];
                    print "</td>";
                    print "</tr>";
            }


                    //<!-- submit button -->

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
