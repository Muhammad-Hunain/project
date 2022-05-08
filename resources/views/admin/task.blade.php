@extends('master')


{{-- @section('content') --}}

    <div class="col-md-8 pl-3 offset-md-3 mt-3   " id="panel" >
        <h1>ADD TASK TO PROJECT</h1>
        <div class="project-box bg-gradient-primary p-3 shadow-lg text-white ">

            {{-- <span>ADD TASK TO PROJECT</span> --}}
            <form action="addtask" method='POST'>
                @csrf
            <input type="text" name='taskname' class="form-control my-3" placeholder="Task Name">
            <select  class="form-control" name='cate'>
                <option value="">Select Category</option>
                <option value="Bug">Bug</option>
                <option value="Task">Task</option>
            </select>
            <h3 class=" text-white mt-3">Select Time</h3>
            <div class="timing d-flex align-items-center">
                <input type="date" name='start' class="form-control w-25 my-3" placeholder="From">
                    <h3 class="mx-3 text-white">-</h3>
                <input type="date" name ='end'class="form-control w-25 my-3" placeholder="To">

            </div>
            <input  class="btn btn-white" name='task' type="submit" value='Add Task'> 
            </form>
        </div>
    </div>