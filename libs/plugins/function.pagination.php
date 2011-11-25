<?php  
/*************************************************************************** 
* Smarty {pagination} Plugin 
* 
* File...: function.pagination.php 
* Type...: Function 
* Name...: pagination 
* Version: 0.0.1.02 
* Date...: 2004-2-1 
* Author.: Ian.H <ian@digiserv.net> 
* Modified by: ZeroFill <smarty@zer0fill.com> 
* Purpose: Provide "previous" | "next" page links 
* 
* 
* Param Options: 
* -------------- 
*  str page_file               | Used for /foo.php?pg=1 style URIs 
*  int page                    | Current page: ?pg=1 
*  int max_items               | Max items to display per page 
*  int total_items             | Total number of items for displaying 
*  [str prev_image]            | Optional path to image for 'Previous' 
*  [str next_image]            | Optional path to image for 'Next' 
*                              | Both of the above paths are relative to 
*                              | the DOCUMENT_ROOT 
*  [str google_friendly]       | Default: no (yes|no) Use 'foo.php/1' 
*                              | rather than 'foo.php?pg=1' 
*                              | (your code needs to use the correct 
*                              | format itself to use this option. 
*                              | ie: $_SERVER['PATH_INFO']) 
*  [str use_query_string]      | Default: yes (yes|no) Whether or not 
*                              | to use the query '/1' or '?pg=1' style 
*                              | URIs or not. This option overrides 
*                              | page_file if defined as "no" 
*  [str prev_page]             | If not using the query_string method, you 
*                              | can specify 'page2.php' for example 
*  [str next_page]             | Likewise for prev_page, the next page can 
*                              | also be defined. 
*  [str name]                  | Change the default name (pg) 
*  [str class]                 | adds a class type to the <select> statement 
* 
* Example: 
* -------- 
*  {pagination page_file="/gallery.php" page=$page_num max_items=6 total_items=$total_items prev_image="/graphics/prev.png" next_image="/graphics/next.png" google_friendly="yes"} 
* 
*  {pagination page=$page_num max_items=6 total_items=$total_items use_query_string="no" prev_page="/page1.php" next_page="/page3.php"} 
* 
****************************************************************************/  

function smarty_function_pagination($params, &$smarty) {  
    extract($params);  
echo $name,'<<<<<'; 
    //if (strlen($page_file) < 1) die('No page!'); 
    $name = (!empty($name)) ? $name : 'pg'; 
    $joiner = (strstr($page_file,'?')) ? '&' : '?'; 
    if (intval($page) < 1) $page = 1;  

    $_query_string_type = (strtolower($google_friendly) == 'yes') ? '/' : $joiner.$name.'=';  
     
    if (strlen($prev_image) > 0) {  
        $_previous = '<img src="' . $prev_image . '" alt="Prev" title="Previous Page" />';  
    } else {  
        $_previous = 'Prev';  
    }  
    if (strlen($next_image) > 0) {  
        $_next = '<img src="' . $next_image . '" alt="Next" title="Next Page" />';  
    } else {  
        $_next = 'Next';  
    }  

    if (strtolower($use_query_string) != 'no') $use_query_string = 'yes';  

    if (strtolower($use_query_string) == 'no') {  
        $_prev_page_file = $prev_page;  
        $_next_page_file = $next_page;  
        $_query_string_type = '';  
    } else {  
        $_prev_page_file = $_next_page_file = $page_file;  
    }  

      if (intval($page) > 1) {  
        if (strtolower($use_query_string) == 'no') {  
            $_prev_url = $prev_page;  
        } else {  
            $_prev_url = $page_file . $_query_string_type . (intval($page) - 1);  
        }  
        $_page_link = '<a href="' . $_prev_url . '">' . $_previous . '</a>';  
    }  

    if ((intval($page) * $max_items) < $total_items) {  
      if (intval($page) > 1)   
      { 
          $_page_link .= '&<form method="post" style="margin: 0px; display:inline">'."\n" 
                        .'<select name="'.$name.'" onChange="location.href=this.form.'.$name.'.value" class="'.$class.'">'; 
                            for ($i=0;$i<intval($total_items);$i++) 
                            {if ($_GET[$name] == $i) $selected = 'selected'; 
                                $_page_link .= '<option value='.$page_file.$_query_string_type.$i.' '.$selected.'>'.($i+1).'</option>'; 
                                $selected = null; 
                            } 
          $_page_link .= '</select></form>&'; 
      } 
      else 
      { 
        $_page_link .= '';  
      } 

        if (strtolower($use_query_string) == 'no') {  
            $_next_url = $next_page;  
        } else { 
            $_next_url = $page_file . $_query_string_type . (intval($page) + 1);  
        }  
        $_page_link .= '<a href="' . $_next_url . '">' . $_next . '</a>';  
   } else {  
        if (!empty($_page_link)) {  
          $_page_link .= '';  
        }  
   }  

    return $_page_link;  
}  


//call syntax
//<{pagination page_file="" page=2 max_items=50 name="p"  total_items=1000 google_friendly="no"}>
?> 


