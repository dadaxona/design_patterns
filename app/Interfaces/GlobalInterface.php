<?php
namespace App\Interfaces;

interface GlobalInterface {
        
    public function get();
    public function create($request);
    public function show($id);
    // public function edit($id);
    public function update($request);
    public function delete($id);

}