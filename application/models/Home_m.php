<?php

class Home_m extends CI_Model {
    public function pesan($post)
    {
        $data = [
            'cek_in' => $post['check_in'],
            'cek_out' => $post['check_out'],
            'nama_lengkap' => $post['nama'],
            'email' => $post['email'],
            'notelp' => $post['notelp'],
            'jenis_kelamin' => $post['jk'],
            'no_ident' => $post['noident'],
            'alamat' => $post['alamat'],
            'id_kamar' => $post['id'],
            'jumlah_kamar' => $post['jml_kamar'],
            'status' => 0,
        ];

        return $this->db->insert('tb_pesanan', $data);
    }

    public function tambahTamu($post)
    {
        $data = [
            'nama_lengkap' => $post['nama'],
            'email' => $post['email'],
            'notelp' => $post['notelp'],
            'jenis_kelamin' => $post['jk'],
            'no_ident' => $post['noident'],
            'alamat' => $post['alamat'],
        ];
        return $this->db->insert('tb_tamu', $data);
    }

    public function kurangStokHotel($post){
        $jmlh = $post['jml_kamar'];
        $jml_stok = $this->db->get_where('tb_kamar', ['id_kamar' => $post['id_kamar']])->row();

        $total = $jml_stok->stok_kamar - $jmlh;
        if($total >= 0){
            return $this->db->update('tb_kamar', ['stok_kamar' => $total], ['id_kamar' => $post['id_kamar']]);
        }
    }

    public function bukti($id)
    {
        $data = $this->db->get_where('tb_pesanan', ['id_pesanan' => $id]);
        return $data->row();
    }

    public function getPesanan()
    {
        $this->db->order_by('id_pesanan', 'DESC');
        $data = $this->db->get('tb_pesanan');
        return $data->row();
    }

    public function getDetailPesanan($id)
    {
        $data = $this->db->get_where('tb_pesanan', ['id_pesanan' => $id]);
        return $data->row();
    }

    public function getKamar()
    {
        $this->db->limit(4);
        $this->db->order_by('harga_kamar', 'ASC');
        // $this->db->order_by('id_tipe', 'DESC');
        $kamar = $this->db->get('tb_tipe_kamar');
        return $kamar->result();
    }

    public function filterKamar($get)
    {
        $this->db->where('stok_kamar >', 0);
        $this->db->where('max_dewasa >=', $get['adult']);
        // $this->db->or_where('max_dewasa <=', $get['adult']);
        $this->db->where('max_anak >=', $get['child']);
        // $this->db->or_where('max_anak <=', $get['child']);
        $this->db->from('tb_kamar');
        $this->db->join('tb_tipe_kamar', 'tb_tipe_kamar.id_tipe = tb_kamar.id_tipe_kamar');
        $kamar = $this->db->get();
        return $kamar->result();
    }
    
    public function getKamarDetail($id)
    {
        $kamar = $this->db->get_where('tb_tipe_kamar', ['id_tipe' => $id]);
        return $kamar->row();
    }

    public function getDetailKamar($id)
    {
        $kamar = $this->db->get_where('tb_kamar', ['id_kamar' => $id]);
        return $kamar->row();
    }

    public function getFasilitas()
    {
        $this->db->order_by('id_fasilitas', 'DESC');
        $this->db->limit(6);
        $fasil = $this->db->get('tb_fasilitas_kamar');
        return $fasil->result();
    }

    public function getInstansi()
    {
        $instansi = $this->db->get('tb_instansi');
        return $instansi->row();
    }

    public function getGaleri()
    {
        $this->db->order_by('id_galeri', 'DESC');
        $galeri = $this->db->get('tb_galeri');
        return $galeri->result();
    }

    public function rating($data){
        $ulasan = [
         	'email_users' => $data['email'],
            'rating'      => $data['rating'],
            'masukan'     => $data['masukan'],
            'id_tipe'     => $data['id_tipe'] 	
        ];
        return $this->db->insert('tb_ulasan', $ulasan);
    }

    public function getRating($id){
        $tipe = $this->db->get_where('tb_tipe_kamar', ['id_tipe' => $id])->row();
        $rate = $this->db->get_where('tb_ulasan', ['id_tipe' => $tipe->id_tipe]);
        return $rate;
    }
}