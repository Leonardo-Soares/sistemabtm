<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $telefone=Confing::get('telefone');
        $whatsapp=Confing::get('whatsapp');
        $linkwhatsapp=Confing::get('linkwhatsapp');
        $instagram=Confing::get('instagram');
        $email=Confing::get('email');
        $facebook=Confing::get('facebook');
        $boleto=Confing::get('boleto');
        $logo1=Confing::get('logo1');
        $logo2=Confing::get('logo2');
        $logo3=Confing::get('logo3');
        $logo4=Confing::get('logo4');
        $logo5=Confing::get('logo5');
        $logo6=Confing::get('logo6');
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


        return view('home', [
        'telefone'=>$telefone,
        'whatsapp'=>$whatsapp,
        'linkwhatsapp'=>$linkwhatsapp,
        'instagram'=>$instagram,
        'email'=>$email,
        'facebook'=>$facebook,
        'boleto'=>$boleto,
        'logo1'=>$logo1,
        'logo2'=>$logo2,
        'logo3'=>$logo3,
        'logo4'=>$logo4,
        'logo5'=>$logo5,
        'logo6'=>$logo6,
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

    public function topo1(Request $request)
    {
        Confing::atualizar('telefone',$request->telefone);
        Confing::atualizar('whatsapp',$request->whatsapp);
        Confing::atualizar('linkwhatsapp',$request->linkwhatsapp);
        Confing::atualizar('instagram',$request->instagram);
        Confing::atualizar('email',$request->email);
        Confing::atualizar('facebook',$request->facebook);
        Confing::atualizar('boleto',$request->boleto);

        return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
    }

    public function slide(Request $request)
    {
        if ($request->hasFile('slide1'))
        {
            $extension = $request->slide1->extension();
            //$path = $request->slide1->store('public_html/images', "slideteste.$extension");
            $filename = rand(1000,9999);
            $imagem = $request->file('slide1');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);

            Confing::atualizar('slide1',$link);
        }

        if ($request->hasFile('slide2'))
        {
            $extension = $request->slide2->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('slide2');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('slide2',$link);
        }

        if ($request->hasFile('slide3'))
        {
            $extension = $request->slide3->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('slide3');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('slide3',$link);
        }

        if ($request->hasFile('mobileslide1'))
        {
            $extension = $request->mobileslide1->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('mobileslide1');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('mobileslide1',$link);
        }

        if ($request->hasFile('mobileslide2'))
        {
            $extension = $request->mobileslide2->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('mobileslide2');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('mobileslide2',$link);
        }

        if ($request->hasFile('mobileslide3'))
        {
            $extension = $request->mobileslide3->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('mobileslide3');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('mobileslide3',$link);
        }

        Confing::atualizar('slide1titulo1',$request->slide1titulo1);
        Confing::atualizar('slide1titulo2',$request->slide1titulo2);
        Confing::atualizar('slide1titulo3',$request->slide1titulo3);
        Confing::atualizar('slide1titulo4',$request->slide1titulo4);
        Confing::atualizar('slide2titulo1',$request->slide2titulo1);
        Confing::atualizar('slide2titulo2',$request->slide2titulo2);
        Confing::atualizar('slide2titulo3',$request->slide2titulo3);
        Confing::atualizar('slide2titulo4',$request->slide2titulo4);
        Confing::atualizar('slide3titulo1',$request->slide3titulo1);
        Confing::atualizar('slide3titulo2',$request->slide3titulo2);
        Confing::atualizar('slide3titulo3',$request->slide3titulo3);
        Confing::atualizar('slide3titulo4',$request->slide3titulo4);

        return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

    }

    public function logo(Request $request)
    {
        if ($request->hasFile('logo1'))
        {
            $extension = $request->logo1->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('logo1');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('logo1',$link);
        }

        Confing::atualizar('logo2',$request->logo2);
        Confing::atualizar('logo3',$request->logo3);
        Confing::atualizar('logo4',$request->logo4);
        Confing::atualizar('logo5',$request->logo5);
        Confing::atualizar('logo6',$request->logo6);


        return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

    }

    public function rodapeslide(Request $request)
    {
        if ($request->hasFile('rodapeslide1'))
        {
            $extension = $request->rodapeslide1->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('rodapeslide1');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('rodapeslide1',$link);
        }

        if ($request->hasFile('rodapeslide2'))
        {
            $extension = $request->rodapeslide2->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('rodapeslide2');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('rodapeslide2',$link);
        }

        if ($request->hasFile('rodapeslide3'))
        {
            $extension = $request->rodapeslide3->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('rodapeslide3');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('rodapeslide3',$link);
        }

        Confing::atualizar('rodapeslide4',$request->rodapeslide4);
        Confing::atualizar('rodapeslide5',$request->rodapeslide5);
        Confing::atualizar('rodapeslide6',$request->rodapeslide6);


        return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

    }

    public function menu(Request $request)
    {
        if ($request->hasFile('menu1'))
        {
            $extension = $request->menu1->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('menu1');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('menu1',$link);
        }

        Confing::atualizar('menu2',$request->menu2);
        Confing::atualizar('menu3',$request->menu3);
        Confing::atualizar('menu4',$request->menu4);
        Confing::atualizar('menu5',$request->menu5);


        return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

    }

    public function associados(Request $request)
    {
        if ($request->hasFile('associados1'))
        {
            $extension = $request->associados1->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados1');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados1',$link);
        }

        if ($request->hasFile('associados2'))
        {
            $extension = $request->associados2->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados2');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados2',$link);
        }

        if ($request->hasFile('associados3'))
        {
            $extension = $request->associados3->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados3');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados3',$link);
        }


        if ($request->hasFile('associados4'))
        {
            $extension = $request->associados4->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados4');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados4',$link);
        }


        if ($request->hasFile('associados5'))
        {
            $extension = $request->associados5->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados5');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados5',$link);
        }

        if ($request->hasFile('associados6'))
        {
            $extension = $request->associados6->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados6');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados6',$link);
        }

        if ($request->hasFile('associados7'))
        {
            $extension = $request->associados7->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados7');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados7',$link);
        }

        if ($request->hasFile('associados8'))
        {
            $extension = $request->associados8->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados8');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados8',$link);
        }

        if ($request->hasFile('associados9'))
        {
            $extension = $request->associados9->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados9');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados9',$link);
        }

        if ($request->hasFile('associados10'))
        {
            $extension = $request->associados10->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados10');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados10',$link);
        }

        if ($request->hasFile('associados11'))
        {
            $extension = $request->associados11->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados11');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados11',$link);
        }

        if ($request->hasFile('associados12'))
        {
            $extension = $request->associados12->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('associados12');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('associados12',$link);
        }

        Confing::atualizar('associados13',$request->associados13);
        Confing::atualizar('associados14',$request->associados14);



        return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

    }

    public function receita(Request $request)
    {
        Confing::atualizar('receita1',$request->receita1);
        Confing::atualizar('receita2',$request->receita2);
        Confing::atualizar('receita3',$request->receita3);
        Confing::atualizar('receita4',$request->receita4);
        Confing::atualizar('receita5',$request->receita5);
        Confing::atualizar('receita6',$request->receita6);
        Confing::atualizar('receita7',$request->receita7);
        Confing::atualizar('receita8',$request->receita8);

        if ($request->hasFile('receita9'))
        {
            $extension = $request->receita9->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('receita9');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('receita9',$link);
        }

        Confing::atualizar('receita10',$request->receita10);
        Confing::atualizar('receita11',$request->receita11);

        return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

    }

    public function footer(Request $request)
    {
        Confing::atualizar('footer1',$request->footer1);
        Confing::atualizar('footer2',$request->footer2);
        Confing::atualizar('footer3',$request->footer3);
        Confing::atualizar('footer4',$request->footer4);
        Confing::atualizar('footer5',$request->footer5);
        Confing::atualizar('footer6',$request->footer6);
        Confing::atualizar('footer7',$request->footer7);
        Confing::atualizar('footer8',$request->footer8);
        Confing::atualizar('footer9',$request->footer9);
        Confing::atualizar('footer10',$request->footer10);
        Confing::atualizar('footer11',$request->footer11);
        Confing::atualizar('footer12',$request->footer12);


        if ($request->hasFile('footer13'))
        {
            $extension = $request->footer13->extension();
            $filename = rand(1000,9999);
            $imagem = $request->file('footer13');
            $link = "/imgs/$filename.".$imagem->extension();
            $extension = $imagem->extension();
            $salvo = $imagem->move('imgs', $filename.'.'.$extension);
            Confing::atualizar('footer13',$link);
        }

        return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

    }

}
