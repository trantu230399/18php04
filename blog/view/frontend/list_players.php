<style>
    img{
        background: #dddddd;
        border-radius: 50%;
        border: 2px solid #a1a1a1;
        margin: 20px;
        padding: 10px;
        text-align: center; 
        width: 200px;
        height: 200px;
    }
    h3{
        margin-top:-20px;
    }
    .images{
        text-align:center;
    }
</style>
<body>
    <table>
        <tbody>
        <tr>
        <?php
        $i = 0 ; 
        while($row=$ListPlayers->fetch_assoc()){
            $name = $row['name'];
            $number = $row['number'];
            $location = $row['location'];
            $url = $row['url'];
            if($i == 5){
                echo "</tr>";
                $i = 0;
            }
            ?>
                <td> 
                    <div class="images">
                        <img src="<?php echo $url;?>">
                        <div>
                            <h3><?php echo $name;?></h3>
                            <span >Số áo:<?php echo $number;?> -</span>
                            <span>Vị Trí:<?php echo $location;?></span>    
                        </div>
                    </div>    
                </td>
        <?php $i++;} ?>
        </tbody>
    </table>
</body>