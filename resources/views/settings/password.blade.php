@extends('settings.template')

@section('section')

  <div class="title">
    <h3 class="font-weight-bold">Обновить пароль</h3>
  </div>
  <hr>
  <form method="post">
    @csrf
    <div class="form-group row">
      <label for="existing" class="col-sm-3 col-form-label font-weight-bold">Актуальный пароль</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="current" placeholder="Ваш актуальный пароль">
      </div>
    </div>
    <hr>
    <div class="form-group row">
      <label for="new" class="col-sm-3 col-form-label font-weight-bold">Новый</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password" placeholder="Введите новый пароль">
      </div>
    </div>
    <div class="form-group row">
      <label for="confirm" class="col-sm-3 col-form-label font-weight-bold">Подтверждение</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Подтвердите новый пароль">
      </div>
    </div>
    <hr>
    <div class="form-group row">
      <div class="col-12 text-right">
        <button type="submit" class="btn btn-primary font-weight-bold py-0 px-5">Подтвердить</button>
      </div>
    </div>
  </form>

@endsection
