<?php 

	/**
	 * 通过id获取地址的名称
	 */
	function getName($id)
	{
		$res = DB::table('areas')->where('areaid',$id)->first();
		return $res->areaname;
	}

	function getUser($id)
	{
		$res = DB::table('users')->where('id',$id)->first();
		return $res->username;
	}
 ?>