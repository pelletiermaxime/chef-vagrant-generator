<?php
$menus = [
    'Index'      => route('generator.index'),
];
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Vagrant Chef Generator</a>
    </div>
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            @foreach ($menus as $menuTitle => $menuLink)
            @if (URL::current() == $menuLink)
                <?php $active = 'active'?>
            @else
                <?php $active = ''?>
            @endif
            <li class="{{ $active }}"><a href="{{ $menuLink }}">{{ $menuTitle }}</a></li>
            @endforeach
        </ul>
        </div>
    </div>
</nav>
