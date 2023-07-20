<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_analisis extends CI_Model
{
	public function variabel($date)
	{
		$data['all'] = $this->db->query("SELECT COUNT(pesanan.id_pesanan) as frequency, DATEDIFF('" . $date . "', MAX(tanggal_pesanan)) as recency, SUM(qty) as monetary, id_produk FROM `pesanan` JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan GROUP BY id_produk")->result();
		$data['limit'] = $this->db->query("SELECT COUNT(pesanan.id_pesanan) as frequency, DATEDIFF('" . $date . "', MAX(tanggal_pesanan)) as recency, SUM(qty) as monetary, id_produk FROM `pesanan` JOIN detail_pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan GROUP BY id_produk LIMIT 3")->result();
		return $data;
	}

	public function grafik()
	{
		return $this->db->query("SELECT nama_produk,status,qty, CASE WHEN status = 1 AND qty >= 10 THEN 'Laku' WHEN status = 2 AND qty <= 9 THEN 'Tidak Laku' ELSE 'Kurang laku' END AS hasils FROM produk LEFT JOIN detail_pesanan ON detail_pesanan.id_produk=produk.id_produk GROUP BY detail_pesanan.id_produk ORDER BY hasils='laku' DESC")->result();
	}
}

/* End of file M_analisis.php */
