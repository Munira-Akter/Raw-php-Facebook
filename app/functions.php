<?php

    /**
     * Validation message
     */
    function validate($msg, $type = 'danger'){
      
        return '<p class="alert alert-'.$type.'"> '. $msg .' ! <button class="close" data-dismiss="alert">&times;                  </button></p>';
    }


    /**
     * Database Control ( Insert )
     */

    function insert($sql){
        global $connection;
        $connection -> query ($sql);
    }
   
   

    /**
     * Data check
     */

    function check($tab , $col , $val){
        global $connection;
        $dataarray = $connection -> query("SELECT $col FROM $tab WHERE $col = '$val'");
        return  $dataarray -> num_rows;
    }

    // file upload function
