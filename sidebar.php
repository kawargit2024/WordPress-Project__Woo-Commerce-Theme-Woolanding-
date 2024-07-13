<?php

// if(!is_active_sidebar('sidebar-1')){
//    return;
//  } 

//  if(!is_active_sidebar('shop-sidebar')){
//    return;
//  }    

if( is_shop() && is_active_sidebar('shop-sidebar') ){
      dynamic_sidebar('shop-sidebar');
 } elseif(!is_shop() && is_active_sidebar('sidebar-1') ){
      dynamic_sidebar('sidebar-1');
 }

