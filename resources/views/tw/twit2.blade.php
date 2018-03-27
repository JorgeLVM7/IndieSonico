<div class="col-sm-3 publicidad">

    <div class="row bw e-banner1">
       <div class="col-12">
           @foreach($banners3 as $banner3)

               <img class="banner1" src="/images/{{$banner3->path}}" alt="">
           @endforeach
           {!! $banners3->render() !!}       </div>
    </div>


    <div class="row bw">
        <div class="col-6 iconos">
            <h4 class="sig">SÍGUENOS</h4>
        </div>
        <div class="col-6 iconos">
            <a href="https://www.facebook.com/indiesonico/" ><img src="/icons/facebook.png" alt=""></a>
            <a href="https://www.instagram.com/indiesonico/"><img src="/icons/instagram.png" alt=""></a>
            <a href="https://twitter.com/IndieSonico"><img src="/icons/twitter.png" alt=""></a>
        </div>
        <hr>
        <div class="col-12 text-center">
            <div class="row text-center">
                <div class="col-12">
                    <span class="siguenos2">¿TIENES UNA BANDA ? </span>
                    <a class="siguenos" href="{{route('contact.index')}}"><b>ESCRÍBENOS</b></a>
                </div>

            </div>
            <div class="row text-center">
                <div class="col-12">
                    <span class="siguenos2">SUBE TU FOTO/ NOTA /MÚSICA</span>
                    <a class="siguenos" href="{{route('contact.index')}}"><b>COLABORA</b></a>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-12">
                    <span class="siguenos2" >DUDA / SUGERENCIAS  </span>
                    <a class="siguenos" href="{{route('contact.index')}}"><b>CONTACTO</b></a>
                </div>

            </div>
            <div class="row">
                <br>
            </div>
        </div>
    </div>

</div>
