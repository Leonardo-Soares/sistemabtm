<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;


class IndexController extends Controller
{

    public function index(){
        $telefone=Confing::get('telefone');
        $whatsapp=Confing::get('whatsapp');
        $linkwhatsapp=Confing::get('linkwhatsapp');
        $email=Confing::get('email');
        $instagram=Confing::get('instagram');
        $facebook=Confing::get('facebook');
        $boleto=Confing::get('boleto');
        $slide1=Confing::get('slide1');
        $slide2=Confing::get('slide2');
        $slide3=Confing::get('slide3');
        $mobileslide1=Confing::get('mobileslide1');
        $mobileslide2=Confing::get('mobileslide2');
        $mobileslide3=Confing::get('mobileslide3');
        $slide1titulo1=Confing::get('slide1titulo1');
        $slide1titulo2=Confing::get('slide1titulo2');
        $slide1titulo3=Confing::get('slide1titulo3');
        $slide1titulo4=Confing::get('slide1titulo4');
        $slide2titulo1=Confing::get('slide2titulo1');
        $slide2titulo2=Confing::get('slide2titulo2');
        $slide2titulo3=Confing::get('slide2titulo3');
        $slide2titulo4=Confing::get('slide2titulo4');
        $slide3titulo1=Confing::get('slide3titulo1');
        $slide3titulo2=Confing::get('slide3titulo2');
        $slide3titulo3=Confing::get('slide3titulo3');
        $slide3titulo4=Confing::get('slide3titulo4');
        $logo1=Confing::get('logo1');
        $logo2=Confing::get('logo2');
        $logo3=Confing::get('logo3');
        $logo4=Confing::get('logo4');
        $logo5=Confing::get('logo5');
        $logo6=Confing::get('logo6');
        $rodapeslide1=Confing::get('rodapeslide1');
        $rodapeslide2=Confing::get('rodapeslide2');
        $rodapeslide3=Confing::get('rodapeslide3');
        $rodapeslide4=Confing::get('rodapeslide4');
        $rodapeslide5=Confing::get('rodapeslide5');
        $rodapeslide6=Confing::get('rodapeslide6');
        $menu1=Confing::get('menu1');
        $menu2=Confing::get('menu2');
        $menu3=Confing::get('menu3');
        $menu4=Confing::get('menu4');
        $menu5=Confing::get('menu5');
        $associados1=Confing::get('associados1');
        $associados2=Confing::get('associados2');
        $associados3=Confing::get('associados3');
        $associados4=Confing::get('associados4');
        $associados5=Confing::get('associados5');
        $associados6=Confing::get('associados6');
        $associados7=Confing::get('associados7');
        $associados8=Confing::get('associados8');
        $associados9=Confing::get('associados9');
        $associados10=Confing::get('associados10');
        $associados11=Confing::get('associados11');
        $associados12=Confing::get('associados12');
        $associados13=Confing::get('associados13');
        $associados14=Confing::get('associados14');
        $receita1=Confing::get('receita1');
        $receita2=Confing::get('receita2');
        $receita3=Confing::get('receita3');
        $receita4=Confing::get('receita4');
        $receita5=Confing::get('receita5');
        $receita6=Confing::get('receita6');
        $receita7=Confing::get('receita7');
        $receita8=Confing::get('receita8');
        $receita9=Confing::get('receita9');
        $receita10=Confing::get('receita10');
        $receita11=Confing::get('receita11');
        $footer1=Confing::get('footer1');
        $footer2=Confing::get('footer2');
        $footer3=Confing::get('footer3');
        $footer4=Confing::get('footer4');
        $footer5=Confing::get('footer5');
        $footer6=Confing::get('footer6');
        $footer7=Confing::get('footer7');
        $footer8=Confing::get('footer8');
        $footer9=Confing::get('footer9');
        $footer10=Confing::get('footer10');
        $footer11=Confing::get('footer11');
        $footer12=Confing::get('footer12');
        $footer13=Confing::get('footer13');


        return view("index",[
            'telefone'=>$telefone,
            'whatsapp'=>$whatsapp,
            'linkwhatsapp'=>$linkwhatsapp,
            'email'=>$email,
            'instagram'=>$instagram,
            'facebook'=>$facebook,
            'boleto'=>$boleto,
            'slide1'=>$slide1,
            'slide2'=>$slide2,
            'slide3'=>$slide3,
            'mobileslide1'=>$mobileslide1,
            'mobileslide2'=>$mobileslide2,
            'mobileslide3'=>$mobileslide3,
            'slide1titulo1'=>$slide1titulo1,
            'slide1titulo2'=>$slide1titulo2,
            'slide1titulo3'=>$slide1titulo3,
            'slide1titulo4'=>$slide1titulo4,
            'slide2titulo1'=>$slide2titulo1,
            'slide2titulo2'=>$slide2titulo2,
            'slide2titulo3'=>$slide2titulo3,
            'slide2titulo4'=>$slide2titulo4,
            'slide3titulo1'=>$slide3titulo1,
            'slide3titulo2'=>$slide3titulo2,
            'slide3titulo3'=>$slide3titulo3,
            'slide3titulo4'=>$slide3titulo4,
            'logo1'=>$logo1,
            'logo2'=>$logo2,
            'logo3'=>$logo3,
            'logo4'=>$logo4,
            'logo5'=>$logo5,
            'logo6'=>$logo6,
            'rodapeslide1'=>$rodapeslide1,
            'rodapeslide2'=>$rodapeslide2,
            'rodapeslide3'=>$rodapeslide3,
            'rodapeslide4'=>$rodapeslide4,
            'rodapeslide5'=>$rodapeslide5,
            'rodapeslide6'=>$rodapeslide6,
            'menu1'=>$menu1,
            'menu2'=>$menu2,
            'menu3'=>$menu3,
            'menu4'=>$menu4,
            'menu5'=>$menu5,
            'associados1'=>$associados1,
            'associados2'=>$associados2,
            'associados3'=>$associados3,
            'associados4'=>$associados4,
            'associados5'=>$associados5,
            'associados6'=>$associados6,
            'associados7'=>$associados7,
            'associados8'=>$associados8,
            'associados9'=>$associados9,
            'associados10'=>$associados10,
            'associados11'=>$associados11,
            'associados12'=>$associados12,
            'associados13'=>$associados13,
            'associados14'=>$associados14,
            'receita1'=>$receita1,
            'receita2'=>$receita2,
            'receita3'=>$receita3,
            'receita4'=>$receita4,
            'receita5'=>$receita5,
            'receita6'=>$receita6,
            'receita7'=>$receita7,
            'receita8'=>$receita8,
            'receita9'=>$receita9,
            'receita10'=>$receita10,
            'receita11'=>$receita11,
            'footer1'=>$footer1,
            'footer2'=>$footer2,
            'footer3'=>$footer3,
            'footer4'=>$footer4,
            'footer5'=>$footer5,
            'footer6'=>$footer6,
            'footer7'=>$footer7,
            'footer8'=>$footer8,
            'footer9'=>$footer9,
            'footer10'=>$footer10,
            'footer11'=>$footer11,
            'footer12'=>$footer12,
            'footer13'=>$footer13
        ]);

        
    }

    public function suporte(Request $request)   
    {
        return view('suporte');
    }
    
}
