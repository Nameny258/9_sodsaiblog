 <?php defined('BASEPATH') OR exit('No direct script access allowed');
 	class Detail_model extends CI_Model
 	{
 	// Model

 		private $table = array();

 		// public function __construct()
 		// {
 		// 	parent::__construct();
 		// 	$this->table['meni'] = 'meni_';
 		// 	$this->table['meni_lang'] = $this->table['meni'] . '_lang';
 		// }

    public function add($data = array())
    {
      $this->db->insert('very_funny', $data);
      return $this->db->insert_id();
    }
 	// Model
 	}
 ?>
