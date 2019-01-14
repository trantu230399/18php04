<style>
    .stbl {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
    table-layout: fixed;
    border : 1px solid yellow;
    margin-top:10px;
}
tbody {
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
}
tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
.st-rs {
    padding: 0px;
    margin: 0px;
    width: 24px;
}
.st-nc {
    text-align: left;
    font-size:30px;
    color:black;
}
div {
    display: block;
}
.str-rs-cl {
    margin: 0px;
    padding: 0px;
}
.str-rc {
    text-align: center;
    padding-right: 8px;
}
.str-dc {
    border-bottom: 1px solid #DFE1E5;
    color: rgba(0,0,0,.87);
    font-size: 25px;
    line-height: 14px;
    height: 40px;
    padding: 0;
    vertical-align: middle;
}
.str-tdc{
    display: flex;
    align-items: center;
}
.str-l {
    padding-right: 8px;
    display: inline-block;
}
.str-tnwl {
    vertical-align: super;
}
</style>
<body>
    <table class="stbl">
        <tbody>
            <tr>
                <td class="st-rs"></td>
                <td class="st-rcw"></td>
            </tr>
            <tr class="imso-ani">
                <th></th>
                <th class="st-hc st-nc imso-regular-font st-shc">
                    <div>Câu Lạc Bộ</div>
                </th>
            </tr>
            <tr>
                <td class="str-rs-cl" style="background-color:#ffffff">
                        <div class="str-rs-ind"></div>
                </td>
                <td class="str-dc str-rc"><div class="abc" style="color:red">Thứ Hạng</div></td>
                <td class="str-dc str-nhnc">
                    <div class="imso-hide-overflow str-tdc">
                        <span class="str-l"></span>
                        <span class="str-tnwl ellipsisize">Name</span>
                    </div>
                </td>         
                <td class="str-dc str-nhnc">Số Trận</td>
                <td class="str-dc str-nhnc">Điểm</td>
            </tr>
            <?php 
                $a = 0;
            while($row=$list_clb->fetch_assoc()){
                $name = $row['name'];
                $images = $row['images'];
                $number = $row['number_of_matches'];
                $point = $row['point'];
                $id_clb    = $row['id'];
                ?>
          
            <tr>
                <td class="str-rs-cl" style="background-color:#ffffff">
                     <div class="str-rs-ind"></div>
                </td>
                <td class="str-dc str-rc"><?php
                    if($a<21){
                        echo $a = $a+1;
                    }
                 ?></td>
                <td class="str-dc str-nhnc">
                    <div class="imso-hide-overflow str-tdc">
                        <span class="str-l"><img src="<?php echo $images;?>" alt style="height:30px;width:30px"></span>
                        <span class="str-tnwl ellipsisize"><a href="index.php?action=list_players&premier_league_id=<?php echo $id_clb;?>&tournaments_name=<?php echo $id;?>" target="_blank" style="color:black;"><?php echo $name;?></a></span>
                    </div>
                </td> 
                <td class="str-dc str-nhnc"><?php echo $number;?></td>
                <td class="str-dc str-nhnc"><?php echo $point;?></td>            
            </tr>
            <?php }
                ?>
        </tbody>
    </table>
</body>