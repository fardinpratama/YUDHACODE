<?php

// config
$config['base_url'] = 'http://localhost/yudhacodeVCI/blog/index';
$config['num_links'] = 3; //untuk jumlah kiri - kanan link aktiva

// styling pagination

$config['full_tag_open'] = '<nav aria-label="pagination"> <ul class="pagination mypagination">';
$config['full_tag_close'] = '</ul></nav>';


$config['first_link'] = 'First';
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';

$config['last_link'] = 'Last';
$config['last_tag_open'] = '<li class="page-item">';
$config['last_tag_close'] = '</li>';


$config['next_link'] = 'next';
$config['next_tag_open'] = '<li class="page-item">';
$config['next_tag_close'] = '</li>';

$config['prev_link'] = 'prev';
$config['prev_tag_open'] = ' <li class="page-item">';
$config['prev_tag_close'] = '</li>';

$config['cur_tag_open'] = '<li class="page-item active" > <a class="page-link" href="#">';
$config['cur_tag_close'] = '</a></li>';

$config['num_tag_open'] = '<li class="page-item">';
$config['num_tag_close'] = '</li>';

$config['attributes'] = array('class' => 'page-link');
