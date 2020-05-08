@extends('themes.website.layout.layout')



@section('content')

<div class="whole-wrap">
    <div class="container box_1170">
        @forelse($post as $p)
            <div class="section-top-border">
                <h3 class="mb-30">{{$p->title}}</h3>
                <div class="row">
                    <div class="col-md-3">
                    <img src="{{asset("$p->image")}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 mt-sm-20">
                        <div class="col-md-12">
                            <p>{{$p->short_desc}}</p>
                        </div>
                        <div class="button-group-area mt-40">
                            <a href="{{url("baiviet",["cat_path"=>$p->Category->path,"slug"=>$p->slug])}}" class="genric-btn success radius">Preview</a>
                            <a href="#" class="genric-btn warning radius">Donate now</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="whole-wrap text-center">
                <div class="container box_1170">
                    <p>Không Thấy Kết Quả</p>
                </div>
            </div>
        @endforelse
    </div>
</div>

@endsection