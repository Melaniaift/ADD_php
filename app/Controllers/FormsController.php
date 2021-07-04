<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class FormsController extends Controller
{
    public function index(){
        $var1="";
        $var2="";
        if(isset($_POST["text1"])){
            $var1=$_POST["text1"];
        }
        else{
            $var1="";
        }
        if(isset($_POST['text2'])){
            $var2=$_POST["text2"];
        }
        else{
            $var2="";
        }
        $var3=(int)$var1+(int)$var2;
        $data['var1']=$var1;
        $data['var2']=$var2;
        $data['var3']=$var3;
        return view('forma',$data);
    }
}
