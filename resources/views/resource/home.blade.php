@extends('resource.header')
@section('title')
    My shopee | Home
@endsection
@section('home')
<div style="display: flex; justify-content:center; align-items:center; margin:10px">
<div class="jumbotron text-center" style="width:80%;font-style:italic; color:gray;font-weight:bold;"  >
   This is laravel a web application similar to OLX where users can insert, edit, delete and view the products available in the database. Only authenticated users can have the access to the products route. This application uses file pond javascript framework to upload the images to the server.
   Also this application uses jetstream, livewire, fortify type features which provides log in, log out, session, registration and authentication facilities. Also provides the creation, updation of users with profile avatars. The features internally uses tailwind css and inertia js. So This enhances the responsiveness of the web application
</div>
</div>
@endsection
