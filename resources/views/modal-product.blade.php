<div class="modal fade" id="ModalProduct" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable container-fluid" role="document">
      <div class="modal-content">
        <div class="modal-body align-items-center justify-content-center">
            <div class="modal-header mb-0">
                <div class="table text-start">
                    <tbody>
                        <tr>
                            <td>
                                <h4 class="modal-title">Produk</h4>
                            </td>
                            <td>
                                <p class="modal-tagline">Segar Sampai Tangan Anda</p>
                            </td>
                        </tr>
                    </tbody>
                </div>                
                <button type="button" id="btnclose" class="btn-close close" data-bs-dismiss="modal" aria-label="Close" onclick="hideProduct()"></button>
            </div>
            <div id="productList" class="row text-center">
                    @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 mb-3 mt-3">
                        <img src="{{ $product['image'] }}" class="img-fluid">
                        <p>{{ $product['name'] }}</p>
                        <input type="hidden" name="source" value="{{ $product['link'] }}">
                        <button class="btn btn-success" data-id="{{ $product['id'] }}" onclick="showProductDetail(this)">Cek lebih detail</button>
                    </div>
                    @endforeach
                    <div class="paginate">
                        {!! $products->links() !!}
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>