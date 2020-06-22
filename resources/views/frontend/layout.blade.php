@include('frontend.header')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('frontend.sidebar')
                </div>               
                <div class="col-sm-9 padding-right">
                   @yield('content')                    
                </div>
            </div>
        </div>
    </section>
@include('frontend.footer')