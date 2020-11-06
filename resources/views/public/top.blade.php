@extends("layouts.app")

@section('content')
<div class="container">
    <div class="mainvisual col-xs-12">
    </div>
</div>
<div class="container">
    <div class="mein-message">
        <p>かんたんおつまみで</p>
        <p>家飲みをもっとたのしく</p>
    </div>
    <div class="beer-img">
        <img src="{{ asset('/images/beer-img.png') }}" alt="beer-img">
    </div>
    <div class="searcharea">
        <p>材料・料理名・飲みたいお酒からレシピを検索</p>
        <form class="search-container">
            <input type="text" id="search-bar" placeholder="ビール">
            <a href="#"><i class="fas fa-search"></i></a>
        </form>
    </div>
</div>

@endsection
