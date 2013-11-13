@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Asset Categories ::
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>
		Asset Categories

		<div class="pull-right">
			<a href="#" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> Create</a>
		</div>
	</h3>
</div>

{{ $categories->links() }}

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th class="span6">@lang('admin/categories/table.id')</th>
			<th class="span2">@lang('admin/categories/table.title')</th>
			<th class="span2">@lang('admin/categories/table.parent')</th>
			<th class="span2">@lang('admin/categories/table.created_at')</th>
			<th class="span2">@lang('table.actions')</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($categories as $category)
		<tr>
			<td>{{ $category->id }}</td>
			<td>{{ $category->name }}</td>
			<td>{{ $category->parent }}</td>
			<td>{{ $category->created_at->diffForHumans() }}</td>
			<td>
				<a href="{{ route('update/category', $category->id) }}" class="btn btn-mini">@lang('button.edit')</a>
				<a href="{{ route('delete/category', $category->id) }}" class="btn btn-mini btn-danger">@lang('button.delete')</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $categories->links() }}
@stop
