@extends('template')
@section('content')
  <section class="main-section">
    <div class="content">
      <h1>Ubah pembelian</h1>
      <hr>
      @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
      @endif

      @foreach($data as $datas)
      <form action="{{ route('pembelian.update',$datas->id)}}"method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="from-group">
          <label for="id">Id:</label>
          <input type="text" class="form-control" id="id" name="id" value="{{ $datas->id}}">
        </div>
        <div class="from-group">
          <label for="kd_barang">KD_barang:</label>
          <input type="text" class="form-control" id="kd_barang" name="kd_barang" value="{{ $datas->kd_barang }}">
        </div>
        <div class="from-group">
          <label for="jml">Jumlah:</label>
          <input type="text" class="form-control" id="jml" name="jml" value="{{ $datas->jml}}">
        </div>
        <div class="from-group">
          <label for="total_harga">Total:</label>
          <input type="text" class="form-control" id="total_harga" name="total_harga" value="{{ $datas->total_harga}}">
        </div>
        <div class="from-group">
          <button type="submit" class="btn btn-md btn-primary">Submit</button>
          <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
      </form>
      @endforeach
    </div>
  </section>
  @endsection
