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
	function __construct()
    {
        // Construct our parent class
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('date');
    }
    
    /**
     * vehicle get method
     * 
     * @return json
     */
    public function index()
    {
        $this->load->view('test');
    }

    /**
     * vehicle get method
     * 
     * @return json
     */
    public function test2()
    {
        $this->load->view('test2');
    }

    /**
     * vehicle get method
     * 
     * @return json
     */
    public function test3()
    {
        $this->load->view('test3');
    }

    public function load_data()
    {
        $name = ['肥仔', 'Oranges', 'Pears', 'Grapes', 'Bananas'];
        $empty = [5, 3, 4, 7, 2];
        $contain = [2, 2, 3, 2, 1];
        echo json_encode(array('name'=>$name, 'empty'=>$empty, 'contain'=>$contain));
    }

    public function load_data2()
    {
        $name = ['1750', '1800', '1850', '1900', '1950', '1999', '2050'];
        $empty = [106, 107, 111, 133, 221, 767, 1766];
        $contain = [502, 635, 809, 947, 1402, 3634, 5268];
        echo json_encode(array('name'=>$name, 'empty'=>$empty, 'contain'=>$contain));
    }

    public function test()
    {
        $st = '2015-07-18 17:11:40';
        for ($i=0; $i<=7; $i++) {
            $tm = strtotime("$st -1 day");
            $st = mdate('%Y-%m-%d %H:%m:%s', $tm);
            echo $st;
        }
        var_dump(mdate('%Y-%m-%d %H:%m:%s', $tm));
        #$tm = strtotime("$st -1 day");
        #echo mdate('%Y-%m-%d %H:%m:%s', $tm); 
    }

}