<?php 

class db_pelanggan_kursus {
	//koneksi database
	private $db;

	public function __construct()
	{
		$this->db = new Database;//koneksi databse yang baru
	}

	public function tambahPelangganKursus($data)
	{
		// id, nama, alamat, email, program, sub_program, pesan, telepon, tanggal_kursus, created_at
		$query = "INSERT INTO db_pelanggan_kursus
					VALUES 
					('0', :nama, :alamat, :email, :program, :sub_program, :pesan, :telepon, :tanggal_kursus, :created_at)";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('program', $data['program']);
		$this->db->bind('sub_program', $data['sub_program']);
		$this->db->bind('pesan', $data['pesan']);
		$this->db->bind('telepon', $data['telepon']);
		$this->db->bind('tanggal_kursus', $data['tanggal_kursus']);
		$this->db->bind('created_at', $data['created_at']);

		$this->db->execute();

		return $this->db->rowCount();
	}
}