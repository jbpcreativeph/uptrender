<?php

	namespace App\Models;

	use CodeIgniter\Model;

	class AffiliateDb extends Model
	{

   		protected $table = 'tblaffiliates';
    	protected $primaryKey = 'idtblAffiliates';
    	protected $allowedFields = ['firstname', 'middlename', 'lastname', 'emailaddress','phonenumber','streetaddress','zipcode','city','state','state','password','initialpassword','affiliateStatus'];
    	protected $useTimestamps = true;

	}