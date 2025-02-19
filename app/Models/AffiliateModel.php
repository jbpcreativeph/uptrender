<?php

	namespace App\Models;

	use CodeIgniter\Model;

	class AffiliateModel extends Model
	{

		protected $useTimestamps = true;
	    protected $table = 'tblmarketingsoftwares';
	    protected $primaryKey = 'idtblMarketingSoftwares';
	    protected $allowedFields = ['idtblMarketingSoftwares','softwarename'];

	    public function getMarketingSoftwares(){
	    	return $this->orderBy('softwarename','ASC')->findAll();
	    }

	}