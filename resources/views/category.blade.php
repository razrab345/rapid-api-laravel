@extends('layout')

@section('content')
<div class="container">
	<div class="navigation">
		<div class="breadcrumbs">
			<a href="/" class="breadcrumb">Главная</a>
			<a href="/categories" class="breadcrumb">Каталог товаров</a>
			<a href="" class="breadcrumb-last">{{$title}}</a>
		</div>
		<h1>{{$title}}</h1>
	</div>	
</div>

<div class="container">
	<div class="sorting">
		<div class="sorting__item">
			<a href="" class="sort-popular">По популярности</a>
		</div>
		<div class="sorting__item">
			<a href="" class="sort-alphavit">По алфавиту</a>
		</div>
		<div class="sorting__item">
			<a href="" class="sort-price">По цене</a>
		</div>
	</div>
</div>


<div class="content">
  <div class="container">
  	<div class="content-block">
  		<div class="content__left">
  			<div class="filtr">
  				
  			</div>
  		</div>
  		<div class="content__right">
  			<div class="product-list">
		  	@foreach ($products as $product)
				<div class="product">
					<div class="product__top">
						<img src="{{$product->img}}" class="product__top-img">
					</div>
					<div class="product__info">
						<h2 class="product-name">
							<a href="">{{$product->title}}</a>
						</h2>
						<div class="product-price">
							<span class="price">{{$product->price}} руб.</span>
						</div>
						<div class="product-quantity">
							<p>в наличии: </p>
							<span class="quantity"> {{$product->quantity}}</span>
						</div>
					</div>
						
				</div>
					@endforeach
		  </div>
  		</div>
  	</div>
  </div>

</div>


  <p>{{$description}}</p>
@endsection