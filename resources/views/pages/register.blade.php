@extends('layouts.default')
@section('content')
<form action="{{ route('user.register') }}" method="post">
    @CSRF
    <input type="text" name="nom_complet" placeholder="Nom complet">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="mot_de_passe" placeholder="Mot de passe">
    <input type="submit" name="register">
   </form>
@stop