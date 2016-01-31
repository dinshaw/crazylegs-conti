<?php


$sql = "select * from $mode where status = 'active' order by id desc";
$result = mysqli_query($sql);

while ($row = mysqli_fetch_array($result))
{
	$standardList = array();

	$standardList['title'] = $row['title'];
	$standardList['body'] = $row['body'];
	$standardList['id'] = $row['id'];

	$date = $row['date'];
	$date=date("M j, Y",$date);
	$standardList['date'] = $date;

	$standardList['image'] = $row['image'];
	$image = $row['image'];
	if ($image)
	{
		$size = getimagesize(__CFG_Image_Path.$mode.'/'.$image);
		if($size[0] > '300')
		{
			$standardList['size'] = 300;
		}
	}

	$standardLoop[] = $standardList;
	$tpl->assign('standardLoop',$standardLoop);
}

?>
