@extends('master')


{{-- @section('content') --}}

   

    <div class="col-md-8 pl-3 offset-md-3 mt-3   " id="panel" >
        <h1>ADD PEOPLE</h1>
        <div class="project-box bg-gradient-primary p-3 shadow-lg text-white ">

            <span>ADD PEOPLE</span>
            <input type="search" class="form-control my-3" placeholder="Type a name or email address">
            <h3 class=" text-white mt-3">Role</h3>
            <select  class="form-control">
                <option value="">Role</option>
                <option value="">Admin</option>
                <option value="">Team Member</option>
            </select>
            <div class="d-grid gap-2 d-md-block mt-3">
                <button class="btn text-white" type="button">Cancel</button>
                <button class="btn btn-white" type="button">Add People</button>
              </div>
        </div>
    </div>
</div>
</div>