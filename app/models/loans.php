<?php
// app/models/loans.php
require_once '../config/database.php';

class Loan {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllLoans() {
        $query = $this->db->query("SELECT * FROM loans");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_pinjam) {
        $query = $this->db->prepare("SELECT * FROM loans WHERE id_pinjam = :id");
        $query->bindParam(':id_pinjam', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($id_pinjam, $id_buku, $buku, $peminjam, $tanggal_pinjam, $tanggal_kembali) {
        $query = $this->db->prepare("
        INSERT INTO loans (id_buku, buku, peminjam, tanggal_pinjam, tanggal_kembali) 
        VALUES (:id_buku, :buku, :peminjam, :tanggal_pinjam, :tanggal_kembali)
    ");
        $query->bindParam(':id_buku', $id_buku);
        $query->bindParam(':buku', $buku);
        $query->bindParam(':peminjam', $peminjam);
        $query->bindParam(':tanggal_pinjam', $tanggal_pinjam);
        $query->bindParam(':tanggal_kembali', $tanggal_kembali);
        return $query->execute();
    }

    // Memperbarui data peminjam
    public function update($id_pinjam, $data) {
        $query = "
            UPDATE loans 
            SET id_buku = :id_buku, buku = :buku, peminjam = :peminjam, tanggal_pinjam = :tanggal_pinjam, tanggal_kembali = :tanggal_kembali
            WHERE id_pinjam = :id_pinjam
        ";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_pinjam', $id_pinjam);
        $stmt->bindParam(':id_buku', $data['id_buku']);
        $stmt->bindParam(':buku', $data['buku']);
        $stmt->bindParam(':peminjam', $data['peminjam']);
        $stmt->bindParam(':tanggal_pinjam', $data['tanggal_pinjam']);
        $stmt->bindParam(':tanggal_kembali', $data['tanggal_kembali']);
        return $stmt->execute();
    }

    // Menghapus data peminjam berdasarkan ID
    public function delete($id_pinjam) {
        $query = "DELETE FROM loans WHERE id_pinjam = :id_pinjam";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_pinjam', $id_pinjam);
        return $stmt->execute();
    }
}
