<?php

namespace App\Models;

use App\Models\User;

class produk extends Model {
	protected $table = 'produk';

	protected $casts = [
		'created_at'=> 'datetime'
	];

	function seller(){
		return $this->belongsTo(User::class, 'id_user');
	}

	function getHargaAttribute(){
		return "Rp.".number_format($this->attributes['harga']);
	}
	/*function getTanggalProduksiAttribute(){
		$tanggal = $this->created_at;
		return strftime("%d %b %Y", strtotime($this->created_at));
	}
*/
}