<div class="main-content">
<?php
include("Layout.php");
include("Config.php");

$select = "select * from Admin ";
$query = mysqli_query($connection,$select);
$count = mysqli_num_rows($query);

$select = "select * from books ";
$query = mysqli_query($connection,$select);
$bcount = mysqli_num_rows($query);

$select = "select * from customer_signup ";
$query = mysqli_query($connection,$select);
$ccount = mysqli_num_rows($query);

$select = "select * from ordertable ";
$query = mysqli_query($connection,$select);
$ocount = mysqli_num_rows($query);

/*$select ="SELECT SUM(Total_Amount) FROM ordertable";
$query = mysqli_query($connection,$select);
while($row = mysqli_fetch_array($query))
{
$tcount = $row["Total_Amount"];
	
}
*/

$result = mysqli_query($connection,'SELECT SUM(Total_Amount) as tm FROM ordertable'); 
$row = mysqli_fetch_array($result); 
$sum = $row['tm'];
echo $sum;

?>    
	<div id="page-wrapper">
			<div class="main-page">
			<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-user icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $count ?></strong></h5>
                      <span>Total Workers</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $sum ?></strong></h5>
                      <span>Online Revenue</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-money user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $ocount ?></strong></h5>
                      <span>Orders</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-book dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $bcount ?></strong></h5>
                      <span>Total Books</span>
                    </div>
                </div>
        	 </div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $ccount ?></strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
		</div>
		
		<div class="row-one widgettable">
			<div class="col-md-7 content-top-2 card">
				<div class="agileinfo-cdr">
					<div class="card-header">
                        <h3>Weekly Sales</h3>
                    </div>
					
						<div id="Linegraph" style="width: 98%; height: 350px">
						</div>
						
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
				
		<div class="col_1">
			<div class="col-md-12 span_8">
				<div class="activity_box">
					<h2>Messages</h2>
					<div class="scrollbar" id="style-1">
                    <div class="activity-row">
                    <?php 
					 $select = "select * from contact_us ";
					 $query = mysqli_query($connection,$select);
					 $count = mysqli_num_rows($query);
					 if($count > 0)
					 {
						while($row = mysqli_fetch_array($query))
					 {
					?> 
							<div class="col-xs-3 activity-img"><img src='images/1.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#"><?php echo $row["Name"]?></a></h5>
								<p><?php echo $row["Message"]?></p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6><?php echo date('m/d/y',time())?></h6></div>
					  
                       <?php }}?>
                        </div>
				</div>
			</div>
			
			
			<div class="clearfix"> </div>
			
		</div>
				
			</div>
		</div>
</div>