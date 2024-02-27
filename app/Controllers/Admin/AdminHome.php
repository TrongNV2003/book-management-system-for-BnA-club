<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\BookService;
use App\Services\UserService;

class AdminHome extends BaseController
{
    private $userService;
    private $bookService;

    private $topNav = 'admin/layout/TopNav';
    private $sideNav = 'admin/layout/SideNav';

    public function __construct(){
        $this->userService = new UserService();
        $this->bookService = new BookService();
    }

    private function getCSSJSURL($target){
        if($target=="left"){
            return '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/admin/home/css/leftsidebar.css">
            <script src="'.base_url().'assets/admin/home/js/sideNav.js"></script>
            <script src="https://kit.fontawesome.com/bd2b7b4b68.js" crossorigin="anonymous"></script>';
        } 
        // Both header and left menu
        else {
            return '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/admin/home/css/leftsidebar.css">
            <link rel="stylesheet" type="text/css" href="'.base_url().'assets/admin/home/css/topnav.css">
            <script src="'.base_url().'assets/admin/home/js/sideNav.js"></script>
            <script src="https://kit.fontawesome.com/bd2b7b4b68.js" crossorigin="anonymous"></script>';
        }
    }

    public function index()
    {
        $data = [];
        $data["users"] = $this->userService->getAllUsers();
        $data = $this->loadAdminLayout($data,$this->topNav,$this->getCSSJSURL("header,left"),$this->sideNav);
        return view('admin/BnA',$data);
    }

    public function manageBook()
    {
        $data = [];
        $data["books"] = $this->bookService->getAllBooks();
        $data = $this->loadAdminLayout($data,$this->topNav,$this->getCSSJSURL("header,left"),$this->sideNav);
        return view('admin/ListBook',$data);
    }

    public function addBook()
    {
        $data = [];
        $data["books"] = $this->bookService->getAllBooks();
        $data = $this->loadAdminLayout($data,$this->topNav,$this->getCSSJSURL("header,left"),$this->sideNav);
        return view('admin/AddBook',$data);
    }

    public function newBook()
    {
        $result = $this->bookService->addNewBook($this->request);
        return redirect()->back()->withInput()->with($result['messageCode'],$result['messages']);
    }

    public function contact(){
        $data = [];
        $data = $this->loadAdminLayout($data,$this->topNav,$this->getCSSJSURL("header,left"),$this->sideNav);
        return view('admin/Contact',$data);
    }
}
