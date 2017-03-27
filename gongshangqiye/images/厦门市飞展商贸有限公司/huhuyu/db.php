<?php

// 获取数据列表
function get_list($value='')
{
	# code...
}


// 获取单个数据
function get_one($sql,$db)
{
	$result = $db->query($sql);
	// $result->free();
	$res=$result->fetch_array();
	if ($res) {
		return $res;
	}
	else{
		return false;
	}
	
	
}

// 修改数据
function update($value='')
{
	# code...
}

// 删除数据
function delete($value='')
{
	# code...
}





?>