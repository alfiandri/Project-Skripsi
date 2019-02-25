@extends('layouts.default')

@section('title', ' - Data Emas')

@section('contents')
  <div class="container">
    <div class="row">
      <div class="right-align"><h6><a href="{{ url('/') }}" class="grey-text">Home</a> / Data Emas</h6></div>
      <!-- Modal Trigger -->
      <a class="waves-effect waves-light orange darken-3 btn modal-trigger" href="#dataemas">Tambah Data</a>

      <!-- Modal Structure -->
      <div id="dataemas" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Tambah Data</h4>
          <form method="POST" action="" class="">
            @csrf
            <div class="input-field">
              <input name="bulan" id="bulan" type="text" class="validate">
              <label for="bulan">Bulan</label>
              @if ($errors->has('bulan'))
                <span class="helper-text red-text">{{ $errors->first('bulan') }}</span>
              @endif
            </div>
            <div class="input-field">
              <input name="hargaemas" id="hargaemas" type="number" class="validate">
              <label for="hargaemas">Harga Emas (Rp)</label>
              @if ($errors->has('hargaemas'))
                <span class="helper-text red-text">{{ $errors->first('hargaemas') }}</span>
              @endif
            </div>
            <div class="input-field">
              <input name="inflasi" id="inflasi" type="number" class="validate">
              <label for="inflasi">Inflasi (Dalam persen)</label>
              @if ($errors->has('inflasi'))
                <span class="helper-text red-text">{{ $errors->first('inflasi') }}</span>
              @endif
            </div>
            <div class="input-field">
              <input name="kursdollar" id="kurs" type="number" class="validate">
              <label for="kurs">Kurs Dollar (Rp))</label>
              @if ($errors->has('kursdollar'))
                <span class="helper-text red-text">{{ $errors->first('kursdollar') }}</span>
              @endif
            </div>
            <div class="input-field">
              <input name="sukubunga" id="sukubunga" type="number" class="validate">
              <label for="sukubunga">Suku Bunga (Dalam persen)</label>
              @if ($errors->has('sukubunga'))
                <span class="helper-text red-text">{{ $errors->first('sukubunga') }}</span>
              @endif
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-orange btn-flat">Batal</a>
            <button class="waves-effect waves-orange btn-flat" type="submit">Simpan</a>
          </form>
        </div>
      </div>
      <table class="striped highlight">
        <thead>
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection