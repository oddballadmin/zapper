<?php

class Nav {
    // name of Nav bar
    public $name;
    // checks if user is Logged in
    public $logInState = [0,1];
    // gets current page that the user is currently on
    public $currentPage;
    public $navContents = "";
    // Getters and setters for Nav Class
    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this-> name;
    }
    function setLogInState($logInState){
        $this->logInState = $logInState;
    }
    function getLogInState(){
        return $this->logInState;
    }
    function setCurrentPage($currentPage){
        $this->currentPage = $currentPage;
    }
    function getCurrentPage(){
        return $this->currentPage;
    }


    // creates initial nav opening
    function createNav(){
        
        $navContent =+ "<nav>";
        $isUserGuest = true;
        switch($this->logInState){
            case 0: 
                $isUserGuest = true;
                $navContent =+ "<section id=\"user-account\"></section>";
                break;
            case 1:
                $isUserGuest = false;
                "<section id=\"guest-account\"></section>";
                break;
        }
        
    }
    function removeNav(){

    }
    function addItemtoNavList(){
        if(file_exists('index.php')){
            $navContent=+"<li><a href="/"></a></li>";
        };
    }
    function removeItemToNavList(){
    }
    function addNavToDom($navName){

    }
}
