@extends('settings.template')

@section('section')

  <div class="title">
    <h3 class="font-weight-bold">Установка фото профиля</h3>
  </div>
  <hr>
  <div class="row mt-3">
    
    <div class="col-12 col-md-4">
      <p class="font-weight-bold text-center">Текущее фото профиля</p>
      <img src="{{Auth::user()->profile->avatarUrl()}}" class="img-thumbnail rounded-circle">
    </div>
    <div class="col-12 col-md-7 offset-md-1">
      <div class="card">
        <div class="card-header font-weight-bold bg-white">Обновить фото профиля</div>
        <div class="card-body">
        <form method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="fileInput" name="avatar" accept="image/*">
              <label class="custom-file-label" for="fileInput">Загрузить новое фото профиля</label>
            </div>
            <small class="form-text text-muted">
              Макс. Размер: 1 Мб. Поддерживаемые форматы: jpeg, png.
            </small>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 mt-5 pt-5">
      <hr>
      <div class="form-group row">
        <div class="col-12 text-right">
          {{-- <a class="btn btn-secondary font-weight-bold py-1" href="#">Восстановить фото по умолчанию</a> --}}
          <button type="submit" class="btn btn-primary font-weight-bold py-1">Подтвердить</button>
        </div>
      </div>
    </div>
    </form>

  </div>

@endsection
