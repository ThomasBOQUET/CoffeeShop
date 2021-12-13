<?php

class MainController {

    private $weekOpeningHours;

 
    public function __construct()
    {
       
        $this->weekOpeningHours = [
            'Sunday' => 'Closed', 
            'Monday' => '7:00 AM to 8:00 PM',
            'Tuesday' => '12:12 AM to 8:00 PM',
            'Wednesday' => '7:00 AM to 8:00 PM',
            'Thursday' => '7:00 AM to 8:00 PM',
            'Friday' => '7:00 AM to 8:00 PM',
            'Saturday' => '9:00 AM to 5:00 PM'
        ];
    }


    public function affichePageStore(){
 
        $this->show('store', $this->weekOpeningHours);
    }


    public function affichePageHome(){
       
        $this->show('home', "Je suis la page HOME");
    }

    public function affichePageProducts(){
       
        $this->show('products', "Je suis la page PRODUCTS");
    }

    public function affichePageAbout(){
       
        $this->show('about', "Je suis la page ABOUT");
    }

public function show($viewName, $viewData)
{
    require_once __DIR__.'/../views/header.tpl.php';
    require_once __DIR__."/../views/{$viewName}.tpl.php";
    require_once __DIR__.'/../views/footer.tpl.php';

}
}