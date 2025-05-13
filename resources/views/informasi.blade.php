@extends('layouts.index_layouts')

@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-capitalize mb-5 text-lg">Informasi</h1>
  
            <!-- <ul class="list-inline breadcumb-nav">
              <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="#" class="text-white-50">All Department</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="section service-2">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-7 text-center">
                  <div class="section-title">
                      <h2>Cek IMT</h2>
                      <div class="divider mx-auto my-4"></div>
                      {{-- disini tempat formnya --}}
                      <form method="POST" action="{{ route('hitung.imt') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="berat">Berat Badan (kg)</label>
                                    <input type="number" step="0.1" name="berat" id="berat" class="form-control" required>
                                </div>
                    
                                <div class="form-group mb-3">
                                    <label for="tinggi">Tinggi Badan (cm)</label>
                                    <input type="number" step="0.1" name="tinggi" id="tinggi" class="form-control" required>
                                </div>
                    
                                <div class="text-center">
                                    <button type="submit" class="btn btn-main">Hitung IMT</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    {{-- Jika ada hasil perhitungan --}}
                    @if(session('imt'))
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-6 text-center">
                                <h4>Hasil IMT: {{ session('imt') }}</h4>
                                <p>Kategori: <strong>{{ session('kategori') }}</strong></p>
                            </div>
                        </div>
                    @endif
                    
                  </div>
              </div>
          </div>

      </div>
  </section>
@endsection