<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_model extends CI_Model {
    private $tabela;
   
    /**
     * SETA A TABELA A SER USADA
     */
    public function setTabela($tabela){
        $this->tabela = $tabela;
    }
    /**
     * RETORNA QUANTIDADE DE REGISTRO
     */
    public function quatReg()
    {
        return $this->db->count_all($this->tabela);        
        // return $this->db->get($this->tabela)->last_row();        
    }
    /**
     * RETORNA TODOS OS CADASTROS
     */
    public function getAll()
    {
        return $this->db->get($this->tabela)->result();        
    }
    /**
     * RETORNA UM REGISTRO PELO ID
     */
    public function getById($id)
    {
        return $this->db->where('id_'.$this->tabela,$id)->get($this->tabela)->result();        
    }
    /**
     * SALVA REGISTRO NO BANCO 
     * SE FOR PASSADO ID ATUALIZA
     * SE NÃO SALVA     * 
     */
    public function save($id,$dados)
    {
        if($id):
            $this->db->where('id_'.$this->tabela,$id);
            $this->db->update($this->tabela,$dados);
        else:
            $this->db->insert($this->tabela,$dados);
        endif;
    }
    /**
     * DELETA REGISTRO DO BANCO
     */
    public function delete($id)
    {
        return $this->db->where('id_'.$this->tabela,$id)->delete($this->tabela);        
    }   
    

}

