<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Breadcrumb Class
 *
 * This class manages the breadcrumb object
 *
 * @package		Breadcrumb
 * @version		1.0
 * @author 		Ümit Arpat <umitarpatkou@gmail.com>
 * @copyright 		Copyright (c) 2014
 * @link		https://github.com/umitarpat/codeigniter-breadcrumb
 */

class Breadcrumb{
	var $ci;
	var $bread = '';
	var $crumbs = array();
	var $href_param;
	var $seperator;
	var $home_text;
	var $home_link;

	function Bc($seperator="",$href_param=NULL,$home_link='./',$home_text = "Anasayfa"){
		$this->ci =& get_instance();
		$this->href_param = $href_param;
		$this->seperator = $seperator;	
		$this->home_text = $home_text;
		$this->home_link = $home_link;
		$this->crumbs[] = array('crumb'=>$this->home_text,'link'=>$this->home_link);
	}

	function addCrumb($this_crumb,$this_link = NULL,$this_class = NULL){
		$in_crumbs = false;
		// first check that we haven't already got this link in the breadcrumb list.
		foreach($this->crumbs as $crumb){
			if($crumb['crumb'] == $this_crumb ){
				$in_crumbs = true;
			}
			if($crumb['link'] == $this_link &&  $this_link != ''){
				$in_crumbs = true;
			}
		}
		if($in_crumbs == false){
			$this->crumbs[] = array('crumb'=>$this_crumb,'link'=>$this_link);
		}
	}
	// call this to return your breadcrumb html
	
	function makeBread(){
		$sandwich = $this->crumbs;
		$slices = array();
		foreach($sandwich as $slice){
			if (isset($slice['link']) && $slice['link'] != '') {
				$slices[] = ' <i class="fa fa-angle-right"></i>  <a href="' . $slice['link'] . '" '.$this->href_param.'>' . $slice['crumb'] . '</a>';
			} else {
				$slices[] = ' <i class="fa fa-angle-right"></i>  <a>' . $slice['crumb'] . '</a>';
			}	
		}
		$this->bread = join($this->seperator, $slices);
		return $this->bread;
	}
}
