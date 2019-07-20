<?php
	
	class BarangModel extends  GLOBAL_Model {
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function get_barang()
		{
			parent::db()->select('*');
			parent::db()->from('orderapp_barang');
			parent::db()->join('orderapp_kategori', 'orderapp_kategori.kategori_id = orderapp_barang.kategori_id');
			parent::db()->where('barang_isDelete',0);
			return parent::db()->get();
		}
		
		public function get_kategori()
		{
			$query = array('kategori_isDelete' => 0);
			$kategori = parent::get_object_of_row('orderapp_kategori',$query);
			return $kategori->result_array();
		}
		
		public function get_barang_by_category($kategori)
		{
			$query = array(
				'barang_isDelete' => 0,
				'kategori_id' => $kategori
			);
			$kategori = parent::get_object_of_row('orderapp_barang',$query);
			return $kategori->result_array();
		}
		
		public function get_barang_by_id($idBarang)
		{
			parent::db()->select('*');
			parent::db()->from('orderapp_barang');
			parent::db()->join('orderapp_kategori', 'orderapp_kategori.kategori_id = orderapp_barang.kategori_id');
			parent::db()->where('barang_isDelete',0);
			parent::db()->where('barang_id',$idBarang);
			return parent::db()->get()->row_array();
		}
		
		public function get_barang_by_category_name($categoryName)
		{
			parent::db()->select('*');
			parent::db()->from('orderapp_barang');
			parent::db()->join('orderapp_kategori', 'orderapp_kategori.kategori_id = orderapp_barang.kategori_id');
			parent::db()->where('barang_isDelete',0);
			parent::db()->like('kategori_nama',$categoryName);
			return parent::db()->get()->result_array();
		}
		
		public function tambah_barang($dataBarang)
		{
			return parent::insert_with_status('orderapp_barang',$dataBarang);
		}
	}