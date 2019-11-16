<section id="slider" style="overflow: hidden;"><!--slider-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    @php
                        $count = 0;    
                    @endphp
                    @foreach ($sliderData as $slider)
                        @if ($count == 0)
                            <li data-target="#slider-carousel" data-slide-to="{{$count}}" class="active"></li>
                            
                        @else
                            <li data-target="#slider-carousel" data-slide-to="{{$count}}"></li>    
                        @endif

                        @php
                            $count ++;
                        @endphp                        
                    @endforeach
                    </ol>
                    
                    <div class="carousel-inner">
                        @php
                            $count = 1;    
                        @endphp
                        @foreach ($sliderData as $slider)
                            @if ($count === 1)
                                <div class="item item-slide-{{$count}} active" style="background-image: url({{ asset('storage/'.$slider['path']) }}); background-position: center center;background-size: cover;">
                                    <div class="col-sm-6" >
                                        @php
                                            echo $slider['content'];
                                        @endphp
                                        {{-- <button type="button" class="btn btn-default get">Get it now</button> --}}
                                    </div>
                                    <div class="col-sm-12">
                                            {{-- <img src="{{ asset('storage/'.$slider['path']) }}" class="girl img-responsive" alt="" /> --}}
                                    </div>
                                </div>
                            
                            @else
                                <div class="item item-slide-{{$count}}" style="background-image: url({{ asset('storage/'.$slider['path']) }}); background-position: center center;background-size: cover;">
                                    <div class="col-sm-6">
                                            @php
                                            echo $slider['content'];
                                        @endphp
                                    </div>
                                </div>
    
                            @endif                        

                            @php
                                $count ++;
                            @endphp
                        @endforeach
                       
                    </div>
                    {{-- ./carousel-inner --}}
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                
            </div>
            {{-- ./col-sm-12 --}}
        </div>
        {{-- ./row --}}
    </div>
    {{-- ./container --}}
</section><!--/slider-->