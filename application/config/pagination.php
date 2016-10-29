<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 // change default output to work with twitter Bootstrap styling
 $config['full_tag_open'] 	= '<ul class="pagination">';
 $config['full_tag_close'] 	= '</ul><!--pagination-->';
 $config['first_link'] 		= '&laquo;';
 $config['first_tag_open'] 	= '<li>';
 $config['first_tag_close'] 	= '</li>';
 
 $config['last_link'] = '&raquo;';
 $config['last_tag_open'] = '<li>';
 $config['last_tag_close'] = '</li>';
 
 $config['next_link'] = 'Siguiente &rarr;';
 $config['next_tag_open'] = '<li>';
 $config['next_tag_close'] = '</li>';
 
 $config['prev_link'] = '&larr; Anterior';
 $config['prev_tag_open'] = '<li>';
 $config['prev_tag_close'] = '</li>';
 
 $config['cur_tag_open'] = '<li class="active"><a href="">';
 $config['cur_tag_close'] = '</a></li>';
 
 $config['num_tag_open'] = '<li>';
 $config['num_tag_close'] = '</li>';
 
 $config['anchor_class'] = 'class="follow_link"';
 
