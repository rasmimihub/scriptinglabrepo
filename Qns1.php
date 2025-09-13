<!DOCTYPE html>
<html>
    <head>
        <title>Variable Type</title>
    </head>
    <body>
        <pre>
            <table border="1">
                <tr>
                    <td>
                        <h3>1. Array</h3>
                        <h5>Numeric Array</h5>
                        <?php 
                        $province[0] = "Province 1";
                        $province[1] = "Province 2";
                        $province[2] = "Bagmati";
                        $province[3] = "Gandaki";
                        var_dump($province);
                        ?>
                    </td>

                    <td>
                        <h5>Associative Array</h5>
                        <?php 
                        $province["province_1"] = "Biratnagar";
                        $province["province_2"] = "Janakpur";
                        $province["bagmati"] = "Hetaduda";
                        $province["gandaki"] = "Pokhara";
                        var_dump($province);
                        ?>
                    </td>
                    <td>
                        <h3>2. Class</h3>
                        <?php 
                        class Student {
                            private $name;
                            function setName ($name){
                                $this-> name = $name;
                            }
                        }
                         $rasu = new Student;
                         $rasu-> setName ('Rasmuuu');
                         print_r($rasu);
                         ?>
                         <h3>3. Resources</h3>
                         <?php 
                         $fp = fopen("4. name.php", 'r');
                         print_r($fp);
                         ?>
                         <h3>4. NULL</h3>
                         <?php 
                         $var = Null;
                         var_dump($var);
                         ?>
                         <h3>5. Float type</h3>
                         <?php 
                         $a = 1.234;
                         $b = 1.2e3;
                         $c = 7E-10;
                         var_dump($a);
                         var_dump($b);
                         var_dump($c);
                         ?>
                    </td>
                    <td>
                        <h3>6. Integer</h3>
                        <?php 
                        $a = 1234;
                        $b = 0123;
                        $c = 0x1A;
                        $d = 0b1111111;
                        var_dump($a);
                        var_dump($b);
                        var_dump($c);
                        var_dump($d);
                        ?>
                        <h3>7. String</h3>
                        <?php 
                           echo 'PHP is most popular scripting language';
                           ?>
                           <h3>8. Boolean</h3>
                           <?php 
                           $married = false;
                           var_dump($married);
                           ?>
                    </td>
                </tr>
            </table>
        </pre>
    </body>
</html>
