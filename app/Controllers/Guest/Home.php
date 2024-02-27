<?php

namespace App\Controllers\Guest;

use App\Controllers\BaseController;
use App\Services\UserService;
use App\Services\BookService;

class Home extends BaseController
{
    private $service;
    private $bookService;

    // Layout
    private $homeHeader = 'guest/layout/Header';
    private $aboutLeftMenu = 'guest/layout/AboutLeftMenu';
    private $borrowingLeftMenu = 'guest/layout/BorrowingLeftMenu';

    // CssJs
    private $CssJsHomeHeader = '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>';

    public function __construct(){
        $this->service = new UserService();
        $this->bookService = new BookService();
    }

    private function getCSSInAppURL($target){
        if($target=="header"){
            return '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/guest/home/css/headerStyle.css">';
        } 
        // Both header and left menu
        else if($target=="both"){
            return '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/guest/home/css/headerStyle.css">
            <link rel="stylesheet" type="text/css" href="'.base_url().'assets/guest/aboutUs/css/leftMenu.css">';
        }
    }

    public function index()
    {
        $data = [];
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("header").$this->CssJsHomeHeader);
        return view('guest/Home',$data);
    }

    public function aboutUs(){
        $data = [];
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("both").$this->CssJsHomeHeader,$this->aboutLeftMenu);
        return view("guest/AboutUs",$data);
    }

    public function contactUs(){
        $data = [];
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("both").$this->CssJsHomeHeader,$this->aboutLeftMenu);
        return view("guest/ContactUs",$data);
    }

    public function supportUs(){
        $data = [];
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("both").$this->CssJsHomeHeader,$this->aboutLeftMenu);
        return view("guest/SupportUs",$data);
    }

    public function joinUs(){
        $data = [];
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("both").$this->CssJsHomeHeader,$this->aboutLeftMenu);
        return view("guest/JoinUs",$data);
    }

    public function policy(){
        $data = [];
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("both").$this->CssJsHomeHeader,$this->aboutLeftMenu);
        return view("guest/Policy",$data);
    }

    public function borrowing(){
        $data = [];
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("both").$this->CssJsHomeHeader,$this->borrowingLeftMenu);
        return view("guest/Borrowing",$data);
    }

    public function category(){
        $data = [];
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("both").$this->CssJsHomeHeader,$this->borrowingLeftMenu);
        return view("guest/Category",$data);
    }

    public function browse($choice){
        $data = [];
        $data["books"] = $this->bookService->getAllBooks();
        $data['title'] = $choice;
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("header").$this->CssJsHomeHeader);
        $data = $this->loadListBooksLayout($data);
        return view("guest/ListBooks",$data);
    }

    public function bookDetail($choiceID){
        $data = [];
        $data['book'] = $this->bookService->getBookByID(base64_decode($choiceID));
        $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("header").$this->CssJsHomeHeader);
        return view("guest/BookDetail",$data);
    }

    public function borrowBook(){
        $data = [];
        return view("guest/BorrowBook",$data);
    }

    public function renewBook(){
        $data = [];
        return view("guest/Renew",$data);
    }

    public function returnBook(){
        return view("guest/ReturnBook");
    }

    public function suggestBook(){
        return view("guest/SuggestBook");
    }

    public function test(){
        // $data = [];
        // $data = $this->loadMasterLayout($data,$this->homeHeader,$this->getCSSInAppURL("both").$this->CssJsHomeHeader,$this->borrowingLeftMenu);
        return view("guest/layout/Footer");
    }

    public function signUp(){
        return view("guest/SignUp");
    }




    public function create(){
        $result = $this->service->addUserInfo($this->request);
    }


}
