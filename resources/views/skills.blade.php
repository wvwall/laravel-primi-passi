
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
   
    .nav {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 5px solid black;
        height: 50px;
    }
    .nav ul {
        display: flex;
        width: 60%;
        justify-content: space-around;
        list-style: none;
    }
    .nav ul li {
        text-transform: uppercase;
        font-weight: 600;
    }
    .nav ul li a {
        text-decoration: none;
        color: #0CD977;
    }
    .nav ul li .active-ski {
        text-decoration: none;
        color: black;
    }
    .hello {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: calc(100vh - 50px)
    }
    .hello h1 {
        font-size: 150px;
    }
    .dot {
        color: #0CD977;
    }
</style>

@extends('layouts.app')

    @section('main')
        <div class="hello">
        <h1>COMING <br> SOON <span class="dot">.</span></h1>
        </div>
    @endsection
