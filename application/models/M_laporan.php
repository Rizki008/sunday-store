<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{

	public function lap_harian($tanggal, $bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan', 'left');
		$this->db->join('produk', 'produk.id_produk = detail_pesanan.id_produk', 'left');
		$this->db->where('DAY(pesanan.tanggal_pesanan)', $tanggal);
		$this->db->where('MONTH(pesanan.tanggal_pesanan)', $bulan);
		$this->db->where('YEAR(pesanan.tanggal_pesanan)', $tahun);
		return $this->db->get()->result();
	}

	public function lap_bulanan($bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan', 'left');
		$this->db->join('produk', 'produk.id_produk = detail_pesanan.id_produk', 'left');
		$this->db->where('MONTH(tanggal_pesanan)', $bulan);
		$this->db->where('YEAR(tanggal_pesanan)', $tahun);
		$this->db->where('status_order=4');
		return $this->db->get()->result();
	}

	public function lap_tahunan($tahun)
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan', 'detail_pesanan.id_pesanan = pesanan.id_pesanan', 'left');
		$this->db->join('produk', 'produk.id_produk = detail_pesanan.id_produk', 'left');
		$this->db->where('YEAR(tanggal_pesanan)', $tahun);
		$this->db->where('status_order=4');
		return $this->db->get()->result();
	}
}

/* End of file M_laporan.php */
