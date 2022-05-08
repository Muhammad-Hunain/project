@extends('master')


{{-- @section('content') --}}

<div class="container">
<div class="row">
    <div class="col-md-8 pl-3 offset-md-3 mt-3   " id="panel" >
        <h1>CREATE PROJECT</h1>
        <div class="project-box bg-gradient-primary p-3 shadow-lg text-white ">
        <span>Add Project Details</span>
        <form action="/createproject" method='POST'>
            @csrf
        <input type="text" name='name' class="form-control my-3" placeholder="Project Name">
        <input type="text" name='projectId' class="form-control w-25 my-3" placeholder="Project Key">
        <input type='submit' class="btn btn-white" name='add' value='Create Project'> 
        </form>
        </div>
    </div>