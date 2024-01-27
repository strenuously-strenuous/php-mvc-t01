<?php



function check_page($para)
{
  return $para == basename($_SERVER['REQUEST_URI']) ? 'active' : '';

}