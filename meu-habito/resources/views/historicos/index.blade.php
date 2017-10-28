@extends('app')

@section('content')
	<div class="container">
		<h1>Históricos</h1>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Hábito</th>
					<th>Data</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				@foreach($historicos as $hist)
					<tr>
						<td>{{ $hist->habito->nome }}</td>
						<td>{{ $hist->data }}</td>
						<td>
							<a href="{{ route('historicos.edit', ['id'=>$hist->id]) }}" class="btn-sm btn-success"></a>
							<a href="{{ route('historicos.destroy', ['id'=>$hist->id]) }}" class="btn-sm btn-danger"></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
