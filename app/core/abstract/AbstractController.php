<?php

namespace App\Core\Abstract;

abstract class AbstractController
{
    abstract public  function index() ;
    abstract public function create();
    abstract public function destroy() ;
    abstract public function show();
    abstract public function edit() ;
    abstract public function store() ;
}
