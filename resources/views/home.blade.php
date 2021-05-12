
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
        border-bottom: 5px solid black;
        height: 50px;
        align-items: center;
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
        color: #f44336;
    }
    .nav ul li .active-home {
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
        color: #f44336;
    }
</style>
@extends('layouts.app')

    @section('main')
        <div class="hello">
            <h1>HELLO <br> TUTOR <span class="dot">.</span></h1>
        </div>
    @endsection