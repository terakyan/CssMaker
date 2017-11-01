@extends('cms::layouts.admin')
@section('content')
    <div role="tabpanel" class="m-t-10" id="main">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main_container_11">
            <table class="table table-bordered" id="tpl-table">
                <thead>
                <tr class="bg-black-darker text-white">
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Created date</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                @if(count($posts))
                    @foreach($posts as $post)
                        <tr>
                            <th>{{ $post->title }}</th>
                            <th>{{ $post->description }}</th>
                            <th width="100px">
                                <img src="{!! url($post->image) !!}" class="img-responsive">
                            </th>
                            <th>{{ BBGetUser($post->author_id) }}</th>
                            <th>{{ $post->status }}</th>
                            <th>{{ BBgetDateFormat($post->created_at) }}</th>
                            <th>
                                <a href="{!! url("admin/blog/edit-post",$post->id) !!}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            </th>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th  colspan="7" class="text-center">
                            No posts
                        </th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
    @include('resources::assests.magicModal')
@stop
@section('CSS')
@stop
@section('JS')
@stop