@props(['active'=>false])

@php

$classes = ' block text-left px-3 leading-6 hover:bg-blue-500 hover:text-white';
if($active) {

    $classes = $classes . ' bg-blue-400 text-white ';

}
 @endphp

<a {{$attributes (['class'=> $classes ])}}>{{$slot}}</a>
