---
title: About
description: A little bit about the site
---
@extends('_layouts.master')

@section('body')
    <h1 class="text-gray-900 dark:text-gray-400">About</h1>

    <img src="/assets/img/about.png"
        alt="About image"
        class="flex w-64 h-64 mx-auto my-6 bg-contain rounded-full md:float-right md:ml-10">

    <p class="mb-6">This is where you can give a little more information about yourself or site. If you'd like to change the structure of this page, you can find the file at <code>source/about.blade.php</code></p>

    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas. fugit natus deserunt atque veniam possimus earum harum itaque est!</p>

    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas. fugit natus deserunt atque veniam!</p>
@endsection
