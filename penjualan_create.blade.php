@extends('template')
@section('content')
  <section class="main-section">
    <div class="content">
      <h1>Tambah Penjualan</h1>
      <hr>
      @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
      @endif

      <form action="{{ route('penjualan.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="id">ID:</label>
          <input type="text" class="form-control" name="id" id="id">
        </div>
        <div class="form-group">
          <label for="kd_barang">kd_barang:</label>
          <select class="form-control" name="kd_barang">
            @foreach($data as $datas)
              <option value="{{ $datas->kd_barang }}">{{ $datas->kd_barang}} ||
                {{ $datas->nama_barang }}
              </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="jml">Jumlah:</label>
          <input type="text" class="form-control" name="jml" id="jml">
        </div>
        <div class="form-group">
          <label for="total_harga">Total:</label>
          <input type="text" class="form-control" name="total_harga" id="total_harga">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
      </form>
    </div>
  </section>
@endsection
