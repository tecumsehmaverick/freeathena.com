<!DOCTYPE html> 
<html> 
    <head> 
        <title>Fancy Menus With CSS and jQuery</title> 
		
        <link rel="stylesheet" href="style.css" type="text/css" media="screen"/> 
        <script type="text/javascript" src="jquery-1.2.6.min.js"></script> 
        <script type="text/javascript" src="http://joshuavaage.com/projects/freeathena.com/vendor/queue/jquery.livequery.js"></script>
		
        <script type="text/javascript"> 
           $(document).ready(function() { 
		   
                	$('.buttons > a').livequery("click",function(e){
						
						var parent  = $(this).parent();
						var getID   =  parent.attr('id').replace('button_','');

						$.post("http://joshuavaage.com/projects/freeathena.com/vendor/queue/follow.php?id="+getID, {
			
						}, function(response){
							
							$('#button_'+getID).html($(response).fadeIn('slow'));
						});
				});	
            });
        </script>
    </head> 
 
    <body> 
	
	<br clear="all" />
	
        <div id="content"> 
		<img src="pin.jpg" alt="" />

		
		<?php
$link = mysql_connect('internal-db.s119066.gridserver.com', 'db119066', '0192837465') or die('error');
@mysql_select_db('db119066_freeathena',$link) or die('error');	
?>
		
		
		<?php  
			
			$user_ip = $_SERVER['REMOTE_ADDR'];
			$user_id = 100;
			
			$result = mysql_query("select * from wha_pin order by id asc");
			
			while ($row = mysql_fetch_array($result))
			{?>
				<div class="pin-panel">
					
					<div class="img-username">
					
						
						<div class="user-title">
							<a href="http://pin.com/<?php  echo $row['username']?>" class="fullname"><?php  echo $row['username']?></a>
							
							
						</div>
					</div>
					
					<?php
					
					$res = mysql_query("select * from wha_pins where user_id = '$user_id' AND pinned_id = ".$row['id']);
					
					$check_result = @mysql_num_rows(@$res);
					
					if($check_result > 0)
					{?>
						<span class="buttons" id="button_<?php echo $row['id']?>"><a class="btn-following" href="javascript: void(0)"></a></span>
						<?php
					}
					else
					{?>
						<span class="buttons" id="button_<?php echo $row['id']?>"><a class="btn-follow" href="javascript:void(0)"></a></span>
						<?php
					}?>
					<br clear="all" />
					
					
				</div>
			<?php  
			}?>
		
		
		
		
		
		
        </div> 
		
		
		<br clear="all" />
		
    </body> 
</html>