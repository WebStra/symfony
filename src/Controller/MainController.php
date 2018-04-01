<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller{

    public function index() {

        $var = 'Hello world';

        return new Response(
            '<h3> This is my first symphony application</h3> '.$var
        );
    }

    public function form(){

        return $this->render('create.html.twig');
    }

    public function create(Request $request){

        dump($request->request);
        die;
        if(count($request->request) > 0){
            return new Response('Form was completed');
        }else {
            return new Response('Something wrong');
        }

    }
}