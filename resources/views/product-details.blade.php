<div class="modal fade" id="productDetailsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered container-fluid" role="document">
        <div class="modal-content">
            <div class="modal-header mb-0">
                <h4 class="modal-title">Produk Segar</h4>
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close" onclick="backToProduct()"></button>
            </div>
            <div id="productDetail" class="modal-body align-items-center justify-content-center">
                <div class="row">
                    <div class="col-lg mt-3 mb-3">
                        <div id="carouselExample" class="carousel carousel-dark slide" data-bs-ride="true">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="" alt="" id="productDetailsModalImage" class="img-fluid">
                                </div>
                              <div class="carousel-item">
                                <div id="productDetailsModalVideo"></div>
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" onclick="prevSlide()">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" onclick="nextSlide()">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                    <div class="col-lg left mt-3 mb-3">
                      <div id="productDetailsModalTitle"></div>
                      <div id="productDetailsModalPrice" style="color: #57bf6d"></div>
                      <div id="productDetailsModalDescription"></div>
                      <form id="productUrl" action="" target="_blank">
                          @csrf
                          <button class="btn btn-success mt-2">Beli sekarang</button>
                        </form>                          
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>


