<?php

    class film_model {
        
        private $table = 'film';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }
        
        public function getAllFilm()
        {
            $this->db->query(' SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getFilmById($id)
        {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }

        public function tambahDataFilm($data)
        {
            $query = "INSERT INTO film (judul, genre, durasi, tahun_rilis, deskripsi)
                        VALUES (:judul, :genre, :durasi, :tahun_rilis, :deskripsi)";
            $this->db->query($query);
            $this->db->bind('judul', $data['judul']);
            $this->db->bind('genre', $data['genre']);
            $this->db->bind('durasi', $data['durasi']);
            $this->db->bind('tahun_rilis', $data['tahun_rilis']);
            $this->db->bind('deskripsi', $data['deskripsi']);

            $this->db->execute();

            return $this->db->rowCount();
        }
        
        public function hapusDataFilm($id)
        {
            $query = "DELETE FROM film where id = :id";
            $this->db->query($query);
            $this->db->bind('id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function editDataFilm($data)
        {
            $query = "UPDATE film SET 
                        judul = :judul, 
                        genre = :genre, 
                        durasi = :durasi, 
                        tahun_rilis = :tahun_rilis, 
                        deskripsi = :deskripsi
                        WHERE id = :id 
                    ";
            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $this->db->bind('judul', $data['judul']);
            $this->db->bind('genre', $data['genre']);
            $this->db->bind('durasi', $data['durasi']);
            $this->db->bind('tahun_rilis', $data['tahun_rilis']);
            $this->db->bind('deskripsi', $data['deskripsi']);

            $this->db->execute();

            return $this->db->rowCount();
        }
        public function cariFilm($keyword)
        {
            $query = "SELECT * FROM film WHERE 
                        judul LIKE :keyword
                        OR genre LIKE :keyword
                        OR tahun_rilis LIKE :keyword";

            $this->db->query($query);

            if(empty($keyword)){
                $this->db->bind('keyword', '%');
            } else {
                $this->db->bind('keyword', '%' .$keyword. '%');
            }

            return $this->db->resultSet();
        }
    }
?>