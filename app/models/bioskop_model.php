<?php

class bioskop_model
{

    private $table = 'bioskop';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBioskop()
    {
        $this->db->query(' SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    //public function getBioskopById($id)
    //{
    //    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    //    $this->db->bind('id', $id);
    //    return $this->db->single();
    //}

    public function tambahDataBioskop($data)
    {
        $query = "INSERT INTO bioskop (nama, alamat, kota)
                        VALUES (:nama, :alamat, :kota)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBioskop($id)
    {
        $query = "DELETE FROM bioskop where id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editDataBioskop($data)
    {
        $query = "UPDATE bioskop SET 
                nama = :nama, 
                alamat = :alamat, 
                kota = :kota 
                WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function cariBioskop($keyword)
    {
        $query = "SELECT * FROM bioskop WHERE 
                        nama LIKE :keyword";

        $this->db->query($query);

        if (empty($keyword)) {
            $this->db->bind('keyword', '%');
        } else {
            $this->db->bind('keyword', '%' . $keyword . '%');
        }

        return $this->db->resultSet();
    }
}
