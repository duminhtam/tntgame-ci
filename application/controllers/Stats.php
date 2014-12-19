<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats extends CI_Controller {


	public function index()
	{
		$this->load->database();
		$data = $this->db->query('SELECT * from tracking')->result_array();
		$onlineCom = @exec("ls /writeback/os*.cow | wc -l");
//		var_dump($data);

		$this->load->view('stats', array('data'=>$data,'onlineCom'=>intval($onlineCom)));
	}

	public function getremoveWeb()
	{
		$this->load->database();
		$warning_words = array();
		$warning_words[] = "cap_3";
		$warning_words[] = "cap-3";
		$warning_words[] = "cap3";
		$warning_words[] = "cat3";
		$warning_words[] = "dam duc";
		$warning_words[] = "dam dang";
		$warning_words[] = "fuck";
		$warning_words[] = "gay";
		$warning_words[] = "giao hop";
		$warning_words[] = "girl";
		$warning_words[] = "goi tinh";
		$warning_words[] = "goi-duc";
		$warning_words[] = "goi-tinh";
		$warning_words[] = "hiep dam";
		$warning_words[] = "hung phan";
		$warning_words[] = "jav";
		$warning_words[] = "khieu-dam";
		$warning_words[] = "khieudam";
		$warning_words[] = "lam tinh";
		$warning_words[] = "lauxanh";
		$warning_words[] = "lauxanh.us";
		$warning_words[] = "len dinh";
		$warning_words[] = "make love";
		$warning_words[] = "may mua";
		$warning_words[] = "nude";
		$warning_words[] = "nude";
		$warning_words[] = "phim dau";
		$warning_words[] = "phim-heo";
		$warning_words[] = "porn";
		$warning_words[] = "Porn.com";
		$warning_words[] = "quan he";
		$warning_words[] = "quanla";
		$warning_words[] = "ra nuoc";
		$warning_words[] = "rape";
		$warning_words[] = "sex";
		$warning_words[] = "sex.com";
		$warning_words[] = "sung suong";
		$warning_words[] = "thac loan";
		$warning_words[] = "thiendia";
		$warning_words[] = "tinh duc";
		$warning_words[] = "tinh-duc";
		$warning_words[] = "truyen dam";
		$warning_words[] = "xnxx.com";
		$warning_words[] = "xvideos.com";
		$warning_words[] = "xx";
		$warning_words[] = "xxx";
		$warning_words[] = "youzeek";
		$warning_words[] = "giao cau";
		$warning_words[] = "fuk";
		$warning_words[] = "fuck";
		$warning_words[] = "fap";
		$warning_words[] = "chan rau";
		$warning_words[] = "cuong hiep";
		$warning_words[] = "cuong buc";
		$warning_words[] = "chi dau";
		$warning_words[] = "anh re";
		$warning_words[] = "em vo";
		$warning_words[] = "chi vo";
		$warning_words[] = "bo chong";
		$warning_words[] = "nang dau";
		$warning_words[] = "japanese";
		$warning_words[] = "incest";
		$warning_words[] = "destruction";
		$warning_words[] = "husband";
		$warning_words[] = "bitch";
		$warning_words[] = "pussy";
		$warning_words[] = "cutie";
		$warning_words[] = "ass";
		$warning_words[] = "cum";
		$warning_words[] = "shot";
		$warning_words[] = "hotel";
		$warning_words[] = "amateur";
		$warning_words[] = "pov";
		$warning_words[] = "cock";
		$warning_words[] = "doggy";
		$warning_words[] = "dick";
		$warning_words[] = "xvideo";

		$webhistory = $this->db->select('URL')->from('webhistorytb');
		foreach($warning_words AS $word){
			$webhistory->or_like("URL", $word);
		}
		$data = $webhistory->limit(10)->get();

		var_dump($data);

//		$this->load->view('stats', array('data'=>$data,'onlineCom'=>intval($onlineCom)));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */
