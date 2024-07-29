
<?php
$url = "http://apiserver.infinityfreeapp.com/api/";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
/*$result = json_decode($result,true);
if(isset($result['status']))
{
	if($result['status'] == true)
	{
		if(isset($result['result']))
		{
			if($result['result'] == true)
			{
				?>
                <table>
                <?php
                foreach($result['data'] as $list)
                {
					?>
                <tr>
                <td><?php echo $list['Id']?></td>
                <td><?php echo $list['Title']?></td>
                <td><?php echo $list['Year']?></td>
                <td><?php echo $list['Genre']?></td>
                <td><?php echo $list['Director']?></td>
                <td><?php echo $list['Poster']?></td>
                
                </tr>
               <?php
			   
			    }?>
                </table>
                
                
                <?php
				
			}
		}
	}
	else
	{
	}
	
}
else
{
	
}
*/
?>

