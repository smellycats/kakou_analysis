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

    /**
     * 加载数据
     * 
     * @return json
     */
    public function load_data()
    {
        $name = ['肥仔', 'Oranges', 'Pears', 'Grapes', 'Bananas'];
        $empty = [5, 3, 4, 7, 2];
        $contain = [2, 2, 3, 2, 1];
        echo json_encode(array('name'=>$name, 'empty'=>$empty, 'contain'=>$contain));
    }

}