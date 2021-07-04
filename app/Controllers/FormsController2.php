<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class FormsController2 extends Controller
{
    public function index(){
        $var1="";
        $var2="";
        $var3="";
        if($this->request->getPost('text1')){
            $var1=$this->request->getPost('text1');
        }
        else{
            $var1="";
        }
        if($this->request->getPost('text2')){
            $var2=$this->request->getPost('text2');
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
