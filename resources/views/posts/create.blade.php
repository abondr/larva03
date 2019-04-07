<?php $active_page = "post_page";?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","Create Post")

@section("page_content")
    @include("posts.form",compact("post"))
@endsection