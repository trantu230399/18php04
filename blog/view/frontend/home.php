<style>
	.videos{
		width:240px;
	}
	.pagination {
		margin:	2px;
		margin-top:	0px;
	}
	.video{
		font-size:20px;
	}
</style>
<div class="news_list">
<div class="col260 fl" data-vr-zone="Homepage_Tin nóng">
<div class="head_news"><a href="#" onclick="return false">Tin nóng</a></div>
<?php 
if(count($listNews)){
	while ($row = $listNews->fetch_assoc()) {
	    $id = $row['stt'];
		  $url = $row['url'];
		  $title =  $row['title'];
			$decription = $row['decription'];
			$content = $row['content'];
		  
?>
	<ul class="list_news_hot">
		<div id="scroll_news_hot">
			<li><h2 class="list_title"><a class='f14' href='index.php?action=news_detail&id=<?php echo $id; ?>'><?php echo $title."</br>";?></a></h2></li>
			<p class="decription"><img src = "<?php echo $url;?>" class="imagess"><?php echo substr($decription,0,200).".........................";?></p>
		</div>	
	</ul>	
<?php }
}
?>
</div>
<div class=list-video>
	<p class="video"></b>Video</b></p>
	<div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <?php for ($i = 1; $i <= $numberPage_video; $i++) {?>
                  <li>
                    <a href="index.php?action=home&page=<?php echo $page;?>&page_video=<?php echo $i?>"> <?php echo $i?> </a>
                  </li>
               <?php }?>              
                <li><a href="#">&raquo;</a></li>
              </ul>
        </div>         
    <table width="100%" border="1">
    <tr>
					<?php
						// Khởi tạo biến đếm $i = 0
						$i = 0;
						// Lặp dữ liệu lấy data từ cơ sở dữ liệu
						while ($row =$ListVideo -> fetch_assoc()){
							// Nếu biến đếm $i = 4, tức là vòng lặp chạy tới bài viết thứ tư thì ta thực hiện xuống hàng cho bài viết kế tiếp
							// Vì mỗi dòng hiển thị, ta chỉ hiển thị 4 bài viết
                            $id = $row['id'];
                            $title = $row['title'];
                            $content = $row['content'];
                            $url = $row['url'];    
                            if ($i == 3) {
								echo "</tr>";
								$i = 0;
							}
					?>
						<td >
                <video controls  class="videos"><source src="<?php echo $url;?>" type="video/mp4"></video>
						</td>
					
					<?php
							$i++;
						}
					?>
    </table>
		</div>     
			<div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <?php for ($i = 1; $i <= $numberPage; $i++) {?>
                  <li>
                    <a href="index.php?action=home&page=<?php echo $i?>"> <?php echo $i?> </a>
                  </li>
               <?php }?>              
                <li><a href="#">&raquo;</a></li>
              </ul>
     </div>
</div>
