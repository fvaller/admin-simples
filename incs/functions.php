<?php


  //AntiInject
  function anti_injection($sql){
    $sql = preg_replace(sql_regcase("/(http|www|wget|from|select|insert|delete|where|.dat|.txt|.gif|drop table|show tables| or |#|\*|--|\\\\)/"),"",$sql);
    $sql = trim($sql);
    $sql = strip_tags($sql);
    $sql = addslashes($sql);
    return $sql;
  }

  function ajustar_data($valor){
    $data = date("d.m.Y", strtotime($valor));
    $hora = date("G:i", strtotime($valor));
    return $hora . ' ' . $data;
  }
  

?>