<?php
class product
    {
        public $pcatagory;
        public $pname = array();
        function insert_catagory($pcatagory)
        {
            $this->pcatagory=$pcatagory;
        }
        function insert_product($product)
        {
            array_push($this->pname,$product);
        }
        function update($array)
        {
            $this->pname=$array;
        }
        function edit_product($poldname,$pnewname)
        {
            $n = array_search($poldname,$this->pname);
            $this->pname[$n]=$pnewname;
        }
        function delete_product($pdeletename)
        {
            $n = array_search($pdeletename,$this->pname);
            unset($this->pname[$n]);
        }
        function show()
        {
            ?>
            <table border="5" width="30%">
                <tr>
                <th>Catagory</th>
                <th>product</th>
                </tr>
                <?php
                    foreach($this->pname as $i)
                    {
                        echo "<tr>
                        <td>".$this->pcatagory."</td>
                        <td>".$i."</td>
                        </tr>";
                    }
                ?>
            </table>
            <?php
        }
        function search($psearchname)
        {
            $k=0;
            foreach($this->pname as $i)
            {
                if ($i==$psearchname)
                    $k=1;
            }
            if ($k == 1)
                echo $psearchname," is available";
            else
                echo $psearchname," is not available";
        }
    }
    $obj = new product();
    
    $obj->insert_catagory("toy");
    
    $obj->insert_product("micky");
    
    $obj->insert_product("tom");

    $obj->insert_product("jerry");

    echo "OLD TABLE<br><br>";

    $obj->show();

    $obj->edit_product("jerry","rocket");
    
    $obj->delete_product("tom");

    echo "<br>NEW TABLE AFTER EDITING AND DELETING<br><br>";

    $obj->show();

    echo "<br>NEW TABLE AFTER UPDATATION<br><br>";

    $array = array("cow","dog");
    
    $obj->update($array);

    $obj->show();

    ?>

    <br>
    <br>
    <form method="post">
    SEARCH <input type="text" name="search">
    <br>
    <input type="submit" value="search">
    </form>

<?php
    $obj->search($_POST['search']);
?> 