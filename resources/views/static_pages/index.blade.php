@extends('layouts.default')


@section('title', '首页')
@section('content')

<div class="jumbotron">
	<h1>Hello LBLOG</h1>
	<p class="lead">
		你看的页面是<a href="/">测试</a>页面
	</p>
	<p>
		开始，从这里！
	</p>
	<p>
		<a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">SIGN UP</a>	
	</p>
</div>


@stop