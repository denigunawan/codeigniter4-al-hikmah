<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
	public function cek_login($username, $password)
	{
		return $this->db->table('users')
		->where(array('username' => $username , 'password' => $password))
		->get()->getRowArray();
	}
}
