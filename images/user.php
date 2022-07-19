<?php
require_once "../model/User.php";

$user = new User();

$id_user = isset($_POST["id_user"])? limpiarCadena($_POST["id_user"]):"";
$name = isset($_POST["name"])? limpiarCadena($_POST["name"]):"";
$nickname = isset($_POST["nickname"])? limpiarCadena($_POST["nickname"]):"";
$phone = isset($_POST["phone"])? limpiarCadena($_POST["phone"]):"";
$password = isset($_POST["password"])? limpiarCadena($_POST["password"]):"";
$type = isset($_POST["taip"])? limpiarCadena($_POST["taip"]):"";

switch ($_GET["op"]){
    case 'saveandedit':
        if (empty($id_user)){
            $answr = $user->insert($name,$nickname,$password,$phone);
            echo $answr ? "User registered" : "Couldn't be registered";
        }
        else{
            $answr = $user->edit($id_user,$name,$nickname, $password,$phone);
            echo $answr ? "User updated" : "Couldn't be updated";
        }

    break;
    case 'deactivate':
        $answr = $user->deactivate($id_user);
        echo $answr ? "User deactivated" : "Couldn't be deactivated";
    break;
    case 'activate':
        $answr = $user->activate($id_user);
        echo $answr ? "User activated" : "Couldn't be activated";
    break;
    case 'show':
        $answr = $user->show($id_user);
        echo json_encode($answr);
    break;
    case 'list':
        $answr = $user->list($id_user);
        $data = Array();
        while ($reg=$answr->fetch_object()){
            $data[]=array(
                "0"=>'<button class="btn btn-warning" onclick="show('.$reg->id.')"><i class="fas fa-pencil-alt"></i></button>',
                "1"=>$reg->name,
                "2"=>$reg->nickname,
                "3"=>$reg->password,
                "4"=>$reg->phone,
                "5"=>$reg->taip
            );
            $results = array(
                "sEcho"=>1, //Information for the datatables
                "iTotalRecords"=> count($data), //We send the total of available registers to the datatable
                "iTotalDisplayRecords"=> count($data),
                "aaData"=>$data);
            echo json_encode($results);
        }
    break;
    
}


?>