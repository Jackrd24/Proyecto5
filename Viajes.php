<?php
include_once './Conexionn.php';

class Viajes {
    //lista de rutas
    function lisRut(){
        $cn=new Conexion();
        $sql="select RUTCOD, RUTNOM from ruta";
        $res= mysqli_query($cn->conecta(), $sql)or 
            die(mysqli_error($cn->conecta()));
        $vec=Array();
        while($f= mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec; 
    }
    
    function lisVprog($cod){
        $cn=new Conexion();
        $sql="select VIANRO,VIAFCH,VIAHRS,COSVIA from viaje 
            where RUTCOD='$cod' ";
        $res= mysqli_query($cn->conecta(), $sql)or 
            die(mysqli_error($cn->conecta()));
        $vec=Array();
        while($f= mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;  
    }
    
    //lista de pasajeros
    function lisPasaj($id){
        $cn=new Conexion();
        $sql="select BOLNRO,Nom_pas,Nro_asi,pago,tipo from pasajeros where VIANRO='$id'";
        $res= mysqli_query($cn->conecta(), $sql)or 
            die(mysqli_error($cn->conecta()));
        $vec=Array();
        while($f= mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;  
    }
    
    //lista de choferes
    function lisChof(){
        $cn=new Conexion();
        $sql="select IDCOD,CHONOM,CHOFIN,CHOCAT from chofer";
        $res= mysqli_query($cn->conecta(), $sql)or 
            die(mysqli_error($cn->conecta()));
        $vec=Array();
        while($f= mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec; 
    }

    function lisVreali($cod){
        $cn=new Conexion();
        $sql="select c.VIANRO,c.VIAFCH,c.COSVIA,p.RUTNOM
            from viaje c inner join ruta p on c.RUTCOD=p.RUTCOD where IDCOD='$cod'";
        $res= mysqli_query($cn->conecta(), $sql)or 
            die(mysqli_error($cn->conecta()));
        $vec=Array();
        while($f= mysqli_fetch_array($res)){
            $vec[]=$f;
        }
        return $vec;  
    }
    
    function adicionpasajeros($vianro, $nombre, $asiento, $tipo, $pago) {
        $cn = new Conexion();
        $sql = "insert into pasajeros values(null, $vianro, '$nombre', $asiento, '$tipo', $pago)";
        $res = mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
        if ($res) {
            echo "grabacion ok";
        } else {
            echo "error";
        }
    }
    
    function anula($cod) {
        $cn = new Conexion();
        $sql = "delete from pasajeros where BOLNRO=$cod";
        $res = mysqli_query($cn->conecta(), $sql) or die(mysqli_error($cn->conecta()));
    }
}
?>
