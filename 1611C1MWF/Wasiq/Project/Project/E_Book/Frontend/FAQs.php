<?php
include("Layout.php");
?>
 
	<!-- //inner banner -->
    <!-- FAQ-help-page -->
    <div class="help about faq-sec">
        <div class="container">
            <h3 class="w3-head">How can we help you</h3>
            <div class="faq-w3agile">
                <h5>Top 10 Frequently asked questions(FAQ)</h5>
                <ul class="faq">
                <?php
		include("Config.php");
		$select = "select * from faqs";
		$query = mysqli_query($connection,$select);
		$count = mysqli_num_rows($query);
		if($count > 0)
		{
			while($row = mysqli_fetch_array($query))
		{
	?>
    <li class="item1">
                        <a href="#" title="click here"><?php echo $row["Question"] ?></a>
                        <ul>
                            <li class="subitem1">
                                <p><?php echo $row["Answer"] ?></p>
                            </li>
                        </ul>
                    </li>
               <?php 
			 }
			} 
	   ?>

                    
                </ul>
            </div>
        </div>
    </div>
    <!-- //FAQ-help-page -->
<?php
include("Footer.php");
?>