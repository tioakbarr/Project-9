@extends('template.beranda')
@section('content')
        <div class="container">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="card " style="margin-top: 40px;">
                  <div class="card-header">
                    Edit Data produk
                  </div>
                  <div class="card-body" >
                   <form action="{{url('produk', $produk->id)}}" method="post">
                      @csrf
                      @method("PUT")
                     <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$produk->nama}}"></input>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                             <label for="" class="control-label">Stok</label>
                             <input type="text" class="form-control" name="stok" value="{{$produk->stok}}"></input>
                          </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Harga</label>
                             <input type="text" class="form-control" name="harga" value="{{$produk->harga}}"></input>
                           </div> 
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Berat</label>
                             <input type="text" class="form-control" name="berat" value="{{$produk->berat}}"></input>
                           </div> 
                        </div>
                     </div>
                      <div class="form-group">
                             <label for="" class="control-label">Deskripsi</label>
                             <textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                         </div>
                     <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>  
            </div> 
          </div>
@endsection