<?php 
namespace App\Interfaces\Sections;

interface SectionRepositoryInterface{
    // Get All Sections
    public function index();

    public function store($request);

     // Update Sections
     public function update($request);

     // destroy Sections
    public function destroy($request);

    public function show($id);

}