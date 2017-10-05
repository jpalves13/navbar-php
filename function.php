<?php

/*FUNCTION PARA A FORMULAÇÃO DO MENU DO MÓDULO DE IMÓVEIS*/
    //PREPARANDO UM ARRAY PARA A CONSTRUÇÃO DO MENU
    function array_process_for_ids($items)
    {
       $new_array = array();
       foreach ($items as $item) {
           $new_array[] = $item;
       }
       return $new_array;
    }

    //FUNÇÃO PARA A CONSTRUÇÃO MENU DE IMÓVEIS
    function bootstrapMenu($array, $parent_id = 0, $parents = array())
    {
       if ($parent_id == 0) {
           foreach ($array as $element) {
               if (($element['parent_id'] != 0) && !in_array($element['parent_id'], $parents)) {
                   $parents[] = $element['parent_id'];
               }
           }
       }
       $menu_html = '';
       $x         = 0;
       foreach ($array as $element) {
           if ($element['parent_id'] == $parent_id) {
               //$menu_html .= '<li class="dropdown show-on-hover">';
               if (in_array($element['id'], $parents)) {
                   if ($element['parent_id'] == NULL) {
                       $menu_html .= '<li class="dropdown show-on-hover">';
                       $menu_html .= '<a href="#" class="dropdown-toggle text-white" aria-haspopup="true" data-toggle="dropdown" role="button" aria-expanded="false"><span class="text-white"> <img src="cadastro.svg" alt="" class="icons-menu-r"> ' . utf8_encode($element['name']) . ' </span></a>';
                   } else {
                       $menu_html .= '<li class="dropdown-submenu show-on-hover">';
                       $menu_html .= '<a href="#" class="dropdown-toggle text-white" aria-haspopup="true" data-toggle="dropdown" role="button" aria-expanded="false"> ' . utf8_encode($element['name']) . '</a>';
                   }
               } else {
                   $menu_html .= '<li>';
                   if ($element['parent_id'] == NULL) {
                       $menu_html .= '<a href=""><span class="text-white"><img src="cadastro.svg" alt="" class="icons-menu-r"> ' . utf8_encode($element['name']) . '</span></a>';
                   } else {
                       $menu_html .= '<a href=""> ' . utf8_encode($element['name']) . '</a>';
                   }
               }
               if (in_array($element['id'], $parents)) {
                   $menu_html .= '<ul class="dropdown-menu multi-level">';
                   $menu_html .= bootstrapMenu($array, $element['id'], $parents);
                   $menu_html .= '</ul>';
               }
               $menu_html .= '</li>';
           }
           $x++;
       }
       return $menu_html;
    }
/*FIM DA FUNCTION PARA A FORMULAÇÃO DO MENU DO MÓDULO DE IMÓVEIS*/


 ?>
