@extends('fronts.layouts.app')
@section('content')
<section id="transaction" class="transaction mt-5 pt-5">
    <div class="container" data-aos="fade-up">
        {!! Form::open() !!}
        <div class="row mt-5">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            {!! Form::label('profesi', 'Anda sebagai', []) !!}
                            {!! Form::select('profesi', ['seller' => 'seller', 'buyer' => 'buyer'], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                {!! Form::label('first_name', 'Nama Depan') !!}
                                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col">
                                {!! Form::label('last_name', 'Nama Belakang') !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('whatsapp', 'Whatsapp anda', []) !!}
                            {!! Form::number('whatsapp', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            {!! Form::label('tipe_produk', 'Tipe Produk', []) !!}
                            {!! Form::select('tipe_produk', ['fisik' => 'Fisik', 'digital' => 'Digital'], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('product', 'Nama produk', []) !!}
                            {!! Form::text('product', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Harga', []) !!}
                            {!! Form::number('price', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                {!! Form::submit('Submit', ['class' => 'btn btn-block btn-success']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
  </section>
@endsection
