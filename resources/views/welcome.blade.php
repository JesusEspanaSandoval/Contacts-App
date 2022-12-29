@extends('layouts.app')

<style>
  nav {
    z-index: 1;
  }

  main {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 100vw;

    // Background
    background-color: #000455;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 1000'%3E%3Cg %3E%3Ccircle fill='%23000455' cx='50' cy='0' r='50'/%3E%3Cg fill='%230a0d5d' %3E%3Ccircle cx='0' cy='50' r='50'/%3E%3Ccircle cx='100' cy='50' r='50'/%3E%3C/g%3E%3Ccircle fill='%23141666' cx='50' cy='100' r='50'/%3E%3Cg fill='%231d1e6e' %3E%3Ccircle cx='0' cy='150' r='50'/%3E%3Ccircle cx='100' cy='150' r='50'/%3E%3C/g%3E%3Ccircle fill='%23242776' cx='50' cy='200' r='50'/%3E%3Cg fill='%232c2f7f' %3E%3Ccircle cx='0' cy='250' r='50'/%3E%3Ccircle cx='100' cy='250' r='50'/%3E%3C/g%3E%3Ccircle fill='%23333887' cx='50' cy='300' r='50'/%3E%3Cg fill='%233b4090' %3E%3Ccircle cx='0' cy='350' r='50'/%3E%3Ccircle cx='100' cy='350' r='50'/%3E%3C/g%3E%3Ccircle fill='%23424998' cx='50' cy='400' r='50'/%3E%3Cg fill='%234952a1' %3E%3Ccircle cx='0' cy='450' r='50'/%3E%3Ccircle cx='100' cy='450' r='50'/%3E%3C/g%3E%3Ccircle fill='%23505ba9' cx='50' cy='500' r='50'/%3E%3Cg fill='%235864b2' %3E%3Ccircle cx='0' cy='550' r='50'/%3E%3Ccircle cx='100' cy='550' r='50'/%3E%3C/g%3E%3Ccircle fill='%235f6dba' cx='50' cy='600' r='50'/%3E%3Cg fill='%236777c3' %3E%3Ccircle cx='0' cy='650' r='50'/%3E%3Ccircle cx='100' cy='650' r='50'/%3E%3C/g%3E%3Ccircle fill='%236f80cb' cx='50' cy='700' r='50'/%3E%3Cg fill='%237789d4' %3E%3Ccircle cx='0' cy='750' r='50'/%3E%3Ccircle cx='100' cy='750' r='50'/%3E%3C/g%3E%3Ccircle fill='%237f93dd' cx='50' cy='800' r='50'/%3E%3Cg fill='%23879de5' %3E%3Ccircle cx='0' cy='850' r='50'/%3E%3Ccircle cx='100' cy='850' r='50'/%3E%3C/g%3E%3Ccircle fill='%238fa6ee' cx='50' cy='900' r='50'/%3E%3Cg fill='%2397b0f6' %3E%3Ccircle cx='0' cy='950' r='50'/%3E%3Ccircle cx='100' cy='950' r='50'/%3E%3C/g%3E%3Ccircle fill='%23A0BAFF' cx='50' cy='1000' r='50'/%3E%3C/g%3E%3C/svg%3E");
    background-attachment: fixed;
    background-size: contain;
  }

  main h1 {
    max-width: 75vw;
  }
</style>

@section('content')
  <h1 class="text-center">Welcome to my contacts app 😊</h1>
  <a href="/register" class="btn btn-dark btn-lg">Get started</a>
@endsection
