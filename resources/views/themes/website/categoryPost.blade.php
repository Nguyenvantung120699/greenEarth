@extends('themes.website.layout.layout')
@section("title",$title)
@section('content')
<div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset("img/hero/contact_hero.jpg")}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{$categories->category_name}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- slider Area End-->
	
	<!-- Start Sample Area -->
	<section class="sample-text-area">
		<div class="container box_1170">
			<h3 class="text-heading">Green Earth and {{$categories->category_name}}</h3>
			<p class="sample-text">
            Wildlife conservation is the practice of protecting wildlife species and their habitats. 
            The goal of wildlife conservation is to ensure that the natural world will be protected to protect future generations and to help humanity realize the importance of wildlife and the wildlife environment.
             with humans and different species on this planet.
            Many countries have government agencies and institutions dedicated to the conservation of wildlife, 
            to support the implementation of policies designed to protect wildlife. Many independent non-profit organizations also contribute to the conservation of wildlife. Nowadays, wildlife conservation has become an increasingly important fact due to the negative impacts of human activities on wildlife. The importance of rhinos, elephants, tigers and pangolins, besides contributing directly to the conservation of these animals, is symbolic and motivates the conservation of all wildlife species. contribute to preventing natural disasters, maintaining ecological services important to the life and socio-economic development of local, local, national and international communities.
			</p>
		</div>
	</section>

    <div class="whole-wrap">
    <div class="text-center">
        <h3>Activities of "{{$categories->category_name}}"</h3>
    </div>
		<div class="container box_1170">
        @foreach($posts as $post)
                <div class="section-top-border">
                    <h4 class="mb-30">{{$post->title}}</h4>
                    <div class="row">
                        <div class="col-md-3">
                        <img src="{{asset("$post->image")}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9 mt-sm-20">
                            <div class="col-md-12">
                                <p>{{$post->short_desc}}</p>
                            </div>
                            <div class="button-group-area mt-40">
                            <a href="{{url("baiviet",["cat_path"=>$post->Category->path,"slug"=>$post->slug])}}" class="genric-btn success radius">Preview</a>
                            <a href="#" class="genric-btn warning radius">Donate now</a>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
			<div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Complaints and suggestions</h2>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="telephone" id="telephone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your telephone'" placeholder="Telephone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="address" id="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address'" placeholder="Enter Address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
			<div class="section-top-border">
				<h3 class="mb-30">Message To Remember</h3>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
							“The key answer to the question of why biodiversity is such a concern is: The rest of the world nature can continue to live without us, but we cannot survive. because without them”
						</blockquote>
					</div>
				</div>
			</div>
        </div>
    </div>
    {!! $posts->links() !!}
@endsection