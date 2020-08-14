@extends('temp.layout')
@section('content')
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					<img src="/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="/">الـرئيـسـية</a></li>
						<li class="nav-item"><a class="nav-link" href="/about">عـن الـأكـاديـميـة</a></li>
						<li class="nav-item"><a class="nav-link" href="/pricing">الـأسـعار</a></li>
						<li class="nav-item active"><a class="nav-link" href="/join"> الـتواصـل & الـإنـضـمام</a></li>
					</ul>
				
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
<div class="container mt-3 mb-3">

 <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd4MuajNoQffvA55bbac0x_CXdySOCI1GOt5DLO4NzxsB_XKQ/viewform?embedded=true" class="col-12" frameborder="0" height="2300">Loading…</iframe>
</div>



<div class="jumbotron text-right mb-0" >
  <h1 class="display-4">شكـراً للـتواصـل </h1>
  <p class="lead">فى حالة تعذر ملئ الإستمارة برجاء التواصل معنا مباشرة على الرقم الوتس آب</p>
  <hr class="my-4">
  <p>خـدمـةٌ علـى مـدار الـساعـة</p>
  <a class="btn btn-primary btn-lg" href="https://wa.me/201100667415"  target="_blank" role="button">واتـس آب</a>
</div>

@endsection