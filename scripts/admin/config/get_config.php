<?
$sql = "select * from config";
$query = mysqli_query($sql);

while($rows = mysqli_fetch_array($query)){
	$config = array();

	$config['id'] = $rows['id'];
	$config['name'] = $rows['name'];
	$config['value'] = $rows['value'];
	$config['description'] = $rows['description'];
	$config['lastChange'] = $rows['lastChange'];
	$config['changeBy'] = $rows['changeBy'];

	$configList[] = $config;
}
$tpl->assign('configLoop',$configList);
?>

