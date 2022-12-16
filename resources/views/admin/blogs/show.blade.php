@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.blog.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.blogs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.blog.fields.id') }}
                        </th>
                        <td>
                            {{ $blog->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blog.fields.user_by') }}
                        </th>
                        <td>
                            {{ $blog->user_by->username ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blog.fields.image') }}
                        </th>
                        <td>
                            @if($blog->image)
                                <a href="{{ $blog->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $blog->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blog.fields.title') }}
                        </th>
                        <td>
                            {{ $blog->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blog.fields.content') }}
                        </th>
                        <td>
                            {!! $blog->content !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blog.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Blog::STATUS_SELECT[$blog->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.blog.fields.publish_date') }}
                        </th>
                        <td>
                            {{ $blog->publish_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.blogs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection