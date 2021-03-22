@extends('beers.base')

@section('head')
	@section('title', 'Beers - Create')

@section('body')
	@include('beers.form', ['edit' => true])
