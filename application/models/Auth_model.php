<?php

class Auth_model extends CI_Model {
    private $table = 'tb_users';

    // function login_session($user)
    // {
    //     $data_session = [
    //         'email' => $user->email,
    //         'nama'  => $user->nama_lengkap,
    //         'hak'   => $user->hak_akses,
    //     ];
    //     return $this->session->set_userdata($data_session);
    // }

    public function login($post){
        $email    = $post['email'];
        $password = $post['password'];

        $query = $this->db->get_where($this->table, ['email'=>$email, 'password' => $password]);
        if($query->num_rows() > 0){
            return $query->row();
        }
    }

    public function register($first, $last, $email, $pass, $telp, $jk){
        $data_user = [
            'nama_lengkap' => $first . ' ' . $last,
            'email' => $email,
            // default pass (12345)
            'password' => 12345,
            'no_telp' => $telp,
            'jenis_kelamin' => $jk,
            // hak akses (0=>admin, 1=>resepsionis, 2=>user) default 2
            'hak_akses' => 2,
            'created_at' => date('Y-m-d H:i:s')
        ];

        if($this->db->insert($this->table, $data_user)){
            $data_session = [
                'email' => $email,
                'nama'  => $first . ' ' . $last,
                'hak'   => 2,
            ];
            $this->session->set_userdata($data_session);
        }
    }

    public function logout()
    {
        $data_session = ['email', 'nama', 'hak'];
        $this->session->unset_userdata($data_session);
    }
}