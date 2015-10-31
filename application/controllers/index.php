<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Index
 *
 * This is vehicle info rest
 *
 * @package		CodeIgniter
 * @subpackage	Cgs Rest Server
 * @category	Controller
 * @author		Fire
*/


class Index extends CI_Controller
{
	public function __construct()
    {
        // Construct our parent class
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('date');

        $this->load->model('Mtest');
    }
    
    /**
     * 默认控制器
     * 
     * @return void
     */
    public function index()
    {
        $this->load->view('test');
    }

    public function test()
    {
        $query = $this->Mtest->getInfo();
        var_dump($query->result_array());
    }

    /**
     * 加载数据
     * 
     * @return json
     */
    public function load_data()
    {
        $name = [];
        $empty = [];
        $contain = [];
        $query = $this->Mtest->getInfo();
        foreach($query->result_array() as $row) {
            #var_dump($row);
            array_push($name, $row['name']);
            array_push($empty, (int)$row['empty']);
            array_push($contain, (int)$row['contain']);
        }
        echo json_encode(array('name'=>$name, 'empty'=>$empty, 'contain'=>$contain));
    }

}