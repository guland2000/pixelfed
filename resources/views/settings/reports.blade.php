@extends('settings.template')

@section('section')

<div class="title">
	<h3 class="font-weight-bold">Отчёты</h3>
</div>
<hr>
<p class="lead">Список ваших отчётов. </p>
<table class="table table-responsive">
	<thead class="bg-light">
			<th scope="col">ID</th>
			<th scope="col">Тип</th>
			<th scope="col">Сообщено</th>
			<th scope="col">Состояние</th>
			<th scope="col">Создано</th>
		</tr>
	</thead>
	<tbody>
		@foreach($reports as $report)
		<tr>
			<td class="font-weight-bold">{{$report->id}}</td>
			<td class="font-weight-bold">{{$report->type}}</td>
			<td class="font-weight-bold"><a href="{{$report->reported()->url()}}">{{str_limit($report->reported()->url(), 30)}}</a></td>
			@if(!$report->admin_seen)
			<td><span class="text-danger font-weight-bold">Нерешённые</span></td>
			@else
			<td><span class="text-success font-weight-bold">Решённые</span></td>
			@endif
			<td class="font-weight-bold">{{$report->created_at->diffForHumans(null, true, true)}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class="d-flex justify-content-center mt-5 small">
	{{$reports->links()}}
</div>
@endsection
