<?php 
        $localhost = "mysql465.umbler.com:41890";
        $user = "rhuanpablo";
        $pass = "Rhuan123";
        $banco = "prototipos";

        $conexao = new mysqli($localhost,$user,$pass,$banco);

        if($conexao -> connect_errno){
            echo "falha";
        }else {
           // echo "Conectado";
        }

        function formata_data($data){
            $d = explode('-',$data);
            $e = $d[2] ."/". $d[1] ."/".$d[0];
            return $e;
        }
       
?>