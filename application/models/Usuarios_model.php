
<?php
class Usuarios_model extends CI_Model {


/****************************************************************************
  Nombre: Usuarios_model.php
  Proposito:  Modelo general
  REVISIONES:
  Ver        Date        Autor            Description
  ---------  ----------  ---------------  ------------------------------------
  1.0        22/03/2021  Ali Mendoza      Se ha creado el contraldor
 * ************************************************************************** */
        public $variable;
        

        public function __contruct(){
                parent::__contruct();
        }
        public function login($ndocumento,$clave)
        {

             $this->db->where('ndocumento', $ndocumento);
             $this->db->where('clave', $clave);
             $q = $this->db->get('usuarios');
             if($q->num_rows()>0){
              return true;
            
              }
                
        }

        public function insertar($data){
                
                $this->db->insert('usuarios', $data);
                return $this->db->insert_id();
        }

        public function comboNacionalidad(){
        
                $query = $this->db->get('nacionalidad');
                foreach ($query->result() as $row)
                {
                    $idnacionalidad=$row->idnacionalidad;
                    $nombre= $row->nombre;
                    $return_arr[] = array("idnacionalidad" => $idnacionalidad,
                                           "nombre" => $nombre);
                }

                return json_encode($return_arr);  // Devuelve un json array
                
        }

        public function comboTipoDocumento(){
        
                $query = $this->db->get('tipodocumento');
                foreach ($query->result() as $row)
                {
                    $idtipodocumento=$row->idtipodocumento;
                    $nombre= $row->nombre;
                    $return_arr[] = array("idtipodocumento" => $idtipodocumento,
                                           "nombre" => $nombre);
                }

                return json_encode($return_arr);  // Devuelve un json array
                
        }

        public function listaUsuarios(){
           
           $query = $this->db->get('usuarios');
           foreach ($query->result() as $row)
           {
              $idtipodocumento=$row->idtipodocumento;
              $nombre= $row->nombre;
              $amaterno=$row->amaterno;
              $apaterno= $row->apaterno;
              $ndocumento= $row->ndocumento;

               $return_arr[] = array("idtipodocumento" => $idtipodocumento,
                                           "nombre" => $nombre,
                                           "amaterno" => $amaterno,
                                           "apaterno" => $apaterno,
                                           "ndocumento"   => $ndocumento);
           }

            return json_encode($return_arr);  // Devuelve un json array
        }

}