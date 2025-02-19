<?php

	namespace App\Models;

	use CodeIgniter\Model;

	class CompanyDb extends Model
	{

	    protected $table = 'tblcompanies';
	    protected $primaryKey = 'idtblCompanies';
	    protected $allowedFields = ['companyname','title','streedaddress','city','state','zipcode','companystartdate','websiteurl','marketingsoftware','referralcode','referralenrolleddate','referredby','snapshotstatus','companystatus','affiliateid','agreemenid','referralstatus','communicationemail'];

	}