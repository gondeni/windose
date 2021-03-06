<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cliente_MODEL extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
//        $this->load->library('PasswordHash', array(8, FALSE));
    }

    public function alta($ID = null, $usuario, $password, $nombre, $ciudad, $telefono, $email, $preferencia, $coach = null)
    {
        $this->db->set('usuario', $usuario);
        $this->db->set('password', getHashedPassword($password));
        $this->db->set('nombre', $nombre);
        $this->db->set('ciudad', $ciudad);
        $this->db->set('telefono', $telefono);
        $this->db->set('email', $email);
        $this->db->set('preferencia', $preferencia);
        $this->db->insert('clientes');
        //Mailer
    }

    public function buscarCliente($ID = null, $nombre = null)
    {
        if ($ID && $nombre == null) {
            $this->db->select("*");
            $this->db->from('clientes');
            $this->db->where('ID', $ID);
            $consulta = $this->db->get();
            $resultado = $consulta->result();
        }
        //Este supuesto solo busca por el nombre, en caso de haber dos clientes con el mismo nombre, deberá corregirse en un futuro
        else if ($nombre) {
            $this->db->select("*");
            $this->db->from('clientes');
            $this->db->where('nombre', $nombre);
            $consulta = $this->db->get();
            $resultado = $consulta->result();
        } else
            $resultado = null;
        return $resultado;
    }

    public function listarClientes()
    {
        $this->db->select('*');
        $this->db->from('clientes');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }
}
