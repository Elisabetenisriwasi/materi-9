<?php

namespace App\Models;

use App\Models\User;

class Produk extends Model{
	protected $table = 'produk';

	//protected $dates = ['created_at'];

	protected $casts = [
	   'created_at' => 'datetime',
	   'update_at'  => 'datetime',
	   //'harga'    => 'decimal:2'
	   'berat'      => 'decimal:2'
	];


	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	//function getTanggalProduksiAttribute(){
		//$tanggal = $this->created_at;
		//return strftime("%d %b %Y", strtotime($this->created_at));
	//}
}