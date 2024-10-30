<?php
/*
Plugin Name: IM Yell
Plugin URI: http://honuware.com/
Description: IM Yell was designed to allow Internet Marketers a quick way to select text in the visual editor and give it a yellow background.
Author: Ron Steedly
Version: 0.0.3
*/
function imyell_mce_buttons($buttons){
  array_push($buttons, "backcolor");
  return $buttons;
}
add_filter("mce_buttons", "imyell_mce_buttons");
?>