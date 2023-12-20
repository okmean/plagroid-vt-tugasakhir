<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="{{asset('img/plagro-color.png') }}" sizes="192x192" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preload" href="{{ asset('script.js?v=1675754474808')}}" as="script"/>
<link rel="preload" href="{{asset('media/panorama_EDAEA808_E7DF_9977_41EC_A308012AA9AC_0/l/3/0_0.jpg?v=1675754474808')}}" as="image"/>
<link rel="preload" href="{{asset('media/panorama_EDAEA808_E7DF_9977_41EC_A308012AA9AC_0/r/3/0_0.jpg?v=1675754474808')}}" as="image"/>
<link rel="preload" href="{{asset('media/panorama_EDAEA808_E7DF_9977_41EC_A308012AA9AC_0/u/3/0_0.jpg?v=1675754474808')}}" as="image"/>
<link rel="preload" href="{{asset('media/panorama_EDAEA808_E7DF_9977_41EC_A308012AA9AC_0/d/3/0_0.jpg?v=1675754474808')}}" as="image"/>
<link rel="preload" href="{{asset('media/panorama_EDAEA808_E7DF_9977_41EC_A308012AA9AC_0/f/3/0_0.jpg?v=1675754474808')}}" as="image"/>
<link rel="preload" href="{{asset('media/panorama_EDAEA808_E7DF_9977_41EC_A308012AA9AC_0/b/3/0_0.jpg?v=1675754474808')}}" as="image"/>
<script>(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create", "UA-116087-3", "auto"); ga("send", "pageview");</script>
<meta name="description" content="Virtual Tour"/>
<meta name="theme-color" content="#FFFFFF"/>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="{{asset('lib/tdvplayer.js?v=1675754474808')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script type="text/javascript">
var tag = document.createElement('script') 
 tag.src = "https://www.youtube.com/iframe_api";
 var firstScriptTag = document.getElementsByTagName('script')[0]
 firstScriptTag.parentNode.insertBefore(tag, firstScriptTag)
 </script>
</head>
<body onload="onLoad()" id="primary">
    <div id="preloadContainer" style="background-color:rgba(255,255,255,1)">
        <div class="loading">
            <div style="text-align:left; color:#000; "><DIV STYLE="text-align:center;">
                <SPAN STYLE="letter-spacing:0vmin;color:#777777;font-size:12px;font-family:Arial, Helvetica, sans-serif;">
        <img src="{{asset('img/plagro-color.png') }}" alt="plagro.id" style="align-content: center"><br> Loading plagro.id - Virtual Tour. Please wait...</SPAN>
    </DIV>
    <p STYLE="margin:0; line-height:1.11vmin;">
        <BR STYLE="letter-spacing:0vmin;color:#000000;font-size:1.11vmin;font-family:Arial, Helvetica, sans-serif;"/></p></div></div></div>
        <div id="viewer"></div>
        <div id="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                      <a class="navbar-brand text-light" href="#welcome" onclick="setToFirst()">
                        <img src="{{asset('img/plagro-logo.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                    plagro.id
                    </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">                        
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link text-light aboutlink" aria-current="page" href="#aboutus" data-toggle="modal" data-target="#ModalAbout">Tentang Kami</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-light productlink" aria-current="page" href="#produk" data-toggle="modal" data-target="#ModalProduct">Produk</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    <div class="btn-right-corner">
      <div class="fullscreen">
        <button class="btn circle" onclick="openFullscreen()">
          <i data-feather="maximize" class="icon" style="color: white"></i>
        </button>
      </div>
      <div class="map">
        <button class="btn circle" onclick="mapPlagro()">   
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map" style="color: white;"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6" style="color: white;"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
        </button>
      </div>
    </div>
    @include('modal-map')  

    <div id="modal-welcome">
        <div class="modal modal-welcome fade" id="MyModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body text-center align-items-center justify-content-center" style="width:auto; height:auto;">
                    <img src="{{asset('img/plagro-color-text.svg')}}" alt="plagro.id" width="100" height="100" class="mb-3">
                    <p style="text-align: justify">Selamat datang di website virtual tour Plagro. Kami sangat senang dapat menyajikan pengalaman virtual yang menarik dan informatif bagi Anda. Selamat berkeliling dan menjelajahi produk-produk kami.</p>
                    <p><button class="btn explore" style="color: white; background-color: #61CE70;" onclick="return hideWelcome()">saatnya menjelajah!</button></p>
                </div>
              </div>
            </div>
          </div>
    </div>
        <div class="modal fade" id="ModalAbout" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered container-fluid" role="document">
              <div class="modal-content">
                <div class="modal-body text-center align-items-center justify-content-center">
                    <div class="modal-header">
                        <h5 class="modal-title">Tentang Kami</h5>
                        <button type="button" id="btnclose" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-lg mb-3 mt-3">
                          <iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Video Profile Plagro.id" src="https://www.youtube.com/embed/xfmkF9tyE6U?controls=1&rel=0&playsinline=0&modestbranding=0&loop=1&mute=1&enablejsapi=1&origin={{route('home')}}" style="fill;width: -webkit-fill-available;height: -webkit-fill-available;" id="ytPlayer"></iframe>
                        </div>
                        <div class="col-lg left mb-3 mt-3">
                            <img src="{{asset('img/plagro-color-text.svg')}}" alt="plagro.id" width="100" height="100" class="mb-3">
                            <p style="text-align: justify">Plagro.id merupakan sebuah brand yang berada dibawah naungan kelompok tani Green Fresh Pelaga yang terletak di Jl. Tiyingan, Desa Pelaga, Kec. Petang, Kabupaten Badung, Bali. Plagro.id menghadirkan pelayanan terbaik kepada semua pelanggan dengan menyediakan produk-produk pertanian seperti buah, sayur, dan herbs yang dipanen langsusng di dataran tinggi Bali. Kami memastikan setiap produk yang kami kirim tetap terjaga kualitasnya dan tetap segar sampai ke tangan anda.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal">Tutup</button>
                      </div>
                </div>
              </div>
            </div>
          </div>
          <div id="productList">
            @include('modal-product')
          </div>
           <div id="productDetail">
            @include('product-details')
          </div>
          <div class="modal fade" id="modalRosemary" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered container-fluid" role="document">
              <div class="modal-content">
                <div class="modal-body text-start align-items-center justify-content-center">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $namerosemary }}</h5>
                         <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close" onclick="closeProductRosemary()"></button>
                    </div>
                    <div class="row">
                      <div id="contentProductRosemary" class="col-lg mt-3 mb-3">
                        <img src="{{ $imagerosemary }}" alt="{{ $namerosemary }}" class="img-fluid">
                        <video controls loop class="img-fluid">
                            <source src="{{ $videorosemary }}" type="video/mp4">
                        </video>
                      </div>
                      <div class="col-lg left mt-3 mb-3">
                        <div id="product-name">{{ $namerosemary }}</div>
                        <div id="product-price" style="color: #57bf6d">{{ $pricerosemary }}</div>
                        <div id="product-description">{{ $descrosemary }}</div>
                        <form action="{{ $urlrosemary }}" target="_blank">
                          @csrf
                          <button class="btn btn-success mt-2">Beli sekarang</button>
                        </form>
                  </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeProductRosemary()">Tutup</button>
                      </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="modal fade" id="modalBasil" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered container-fluid" role="document">
              <div class="modal-content">
                <div class="modal-body text-start align-items-center justify-content-center">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $namebasil }}</h5>
                        <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close" onclick="closeProductBasil()"></button>
                    </div>
                    <div class="row">
                      <div id="contentProductBasil" class="col-lg mt-3 mb-3">
                        <img src="{{ $imageBasil }}" alt="{{ $namebasil }}" class="img-fluid">
                        <video controls loop class="img-fluid">
                            <source src="{{ $videoBasil }}" type="video/mp4">
                        </video>
                      </div>
                      <div class="col-lg left mt-3 mb-3">
                        <div id="product-name">{{ $namebasil }}</div>
                        <div id="product-price" style="color: #57bf6d">{{ $pricebasil }}</div>
                        <div id="product-description">{{ $descbasil }}</div>
                        <form action="{{ $urlbasil }}" target="_blank">
                          @csrf
                          <button class="btn btn-success mt-2">Beli sekarang</button>
                        </form>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeProductBasil()">Tutup</button>
                      </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modalDill" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered container-fluid" role="document">
              <div class="modal-content">
                <div class="modal-body text-start align-items-center justify-content-center">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $namedill }}</h5>
                         <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close" onclick="closeProductDill()"></button>
                    </div>
                    <div class="row">
                      <div id="contentProductDill" class="col-lg mt-3 mb-3">
                        <img src="{{ $imagedill }}" alt="{{ $namedill }}" class="img-fluid">
                        <video controls loop class="img-fluid">
                            <source src="{{ $videodill }}" type="video/mp4">
                        </video>
                      </div>
                      <div class="col-lg left mt-3 mb-3">
                        <div id="product-name">{{ $namedill }}</div>
                        <div id="product-price" style="color: #57bf6d">{{ $pricedill }}</div>
                        <div id="product-description">{{ $descdill }}</div>
                        <form action="{{ $urldill }}" target="_blank">
                          @csrf
                          <button class="btn btn-success mt-2">Beli sekarang</button>
                        </form>
                      </div>
                  </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeProductDill()">Tutup</button>
                      </div>
                </div>
              </div>
            </div>
          </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      feather.replace()
    </script>
    <script>
      // menampilkan modal "selamat-datang" dengan interval waktu 5 detik setelah web sudah loaded
        $("document").ready(function(){
        setTimeout(function(){
        $("#MyModal").modal("show");
        },5000);
        });
        //end menampilkan modal "selamat-datang" dengan interval waktu 5 detik setelah web sudah loaded

        
      //tombol keluar modal welcome(selamat datang)
      function hideWelcome() {
        $("#MyModal").modal("hide");
      }
        //end modal welcome 

        // menampilkan modal "tentang-kami" setelah diklik
        $('.aboutlink').click(modalabout);

        function modalabout(){
        $('#ModalAbout').modal('show');
      }
      //end menampilkan modal "tentang-kami" setelah diklik
      
      // menampilkan modal "produk" setelah diklik
      $('.productlink').click(modalproduct);
      function modalproduct(){
        $('#ModalProduct').modal('show');
      }
       //end menampilkan modal "produk" setelah diklik
      //menampilkan modal "map"
      function mapPlagro(){
        $('#ModalMap').modal('show');
      }
      //end modal map
      stopIframeVideo = () => {
      let iframe = $('#ytPlayer')
      iframe.each((index) => {
      iframe[index].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
      })
    };
    
    $(document).ready(function() {
    $("#ModalAbout").modal({
        show: false,
        backdrop: 'static'
    });
    
    $(".aboutlink").click(function() {
       $("#ModalAbout").modal("show");             
    });
});
    
    $('.close').click(() => {
    stopIframeVideo()
    });
    
    function showRosemary(){
      $('#modalRosemary').modal('show');
    }
    
            $(document).ready(function() {
    $("#modalRosemary").modal({
        show: false,
        backdrop: 'static'
    });
  })
    
    function showBasil(){
      $('#modalBasil').modal('show');
    }
    
        $(document).ready(function() {
    $("#modalBasil").modal({
        show: false,
        backdrop: 'static'
    });
  })
    
    function showDill(){
      $('#modalDill').modal('show');
    }
    
    $(document).ready(function() {
    $("#modalDill").modal({
        show: false,
        backdrop: 'static'
    });
  })
    
    function closeProductBasil(){
    var video = document.querySelector('#contentProductBasil video');
  if (video) {
    video.pause();
  }
    }
    
        function closeProductRosemary(){
    var video = document.querySelector('#contentProductRosemary video');
  if (video) {
    video.pause();
  }
    }
    
        function closeProductDill(){
    var video = document.querySelector('#contentProductDill video');
  if (video) {
    video.pause();
  }
    }

    function setToFirst(){
      setMediaByName("DJI_0577");
    }
    function backToProduct(){
      var video = document.querySelector('#carouselExample video');
  if (video) {
    video.pause();
  }
  $('#ModalProduct').modal('hide');
  setTimeout(function() {
    $('#ModalProduct').modal('show');
  }, 500);
}

    $(document).ready(function() {
    $("#productDetailsModal").modal({
        show: false,
        backdrop: 'static'
    });
  })

  function prevSlide() {
  var video = document.querySelector('#carouselExample video');
  if (video) {
    video.pause();
  }
  var carousel = document.querySelector('#carouselExample');
  if (carousel && carousel.carousel) {
    carousel.carousel('prev');
  }
}

function nextSlide() {
  var video = document.querySelector('#carouselExample video');
  if (video) {
    video.pause();
  }
  var carousel = document.querySelector('#carouselExample');
  if (carousel && carousel.carousel) {
    carousel.carousel('next');
  }
}
    </script>
   <script>
$(document).ready(function(){
  $(document).on('click', '.pagination a', function (event){
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    showProduct(page);
  });
});

function showProduct(page){
  $('#ModalProduct').modal('hide'); // hide the modal before sending the AJAX request
  $.ajax({
    type: "GET",
    url: "{{ route('product.get-more-product') }}" + "?page=" + page,
    success: function(data){
      $('#productList').html(data);
      $('#ModalProduct').modal('show');
    }
  });
}

function showProductDetail(button) {
  $('#ModalProduct').modal('hide');
    var source = $(button).siblings('input[name="source"]').val();
    $.ajax({
        type: 'GET',
        url: '{{ route("product.details") }}',
        data: { 
            source: source
        },
        success: function(data) {
            $("#productDetailsModalTitle").html(data.name);
            $("#productDetailsModalDescription").html(data.description);
            $("#productDetailsModalPrice").html(data.price);
            $("#productDetailsModalImage").attr("src", data.image);
            $("#productDetailsModalVideo").html(data.video);
            $("#productUrl").attr("action", data.url);
            $('#productDetailsModal').modal('show');

            $('#carouselExampleRide .carousel-item:first').addClass('active');
            $('.carousel-item:first').addClass('first');
            $('#carouselExampleRide').carousel(0);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}
    </script>
    <script>
var elem = document.getElementById("primary");
const button = document.querySelector('.btn.circle');
const i = document.querySelector('.icon');
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
i.setAttribute('data-feather', 'minimize');
button.setAttribute('onclick', 'closeFullscreen()');
}

function closeFullscreen() {
const button = document.querySelector('.btn.circle');
const i = document.querySelector('.icon');
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
i.setAttribute('data-feather', 'maximize');
button.setAttribute('onclick', 'openFullscreen()');
}
</script>
</body>
</html>