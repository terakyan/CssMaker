@extends('cms::layouts.mTabs',['index'=>'blog_pages'])
@section('tab')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="panel panelSettingData">
                <div class="panel-heading" role="tab" id="formBuilder">
                    <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion"
                                               href="#formBuilderCollapse" aria-expanded="true"
                                               aria-controls="formBuilderCollapse">
                            <i class="glyphicon glyphicon-chevron-right"></i>General</a></h4>
                </div>
                <div id="formBuilderCollapse" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="formBuilder">
                    <div class="panel-body">
                        {!! Form::submit("Save",['class' => 'btn btn-info pull-left']) !!}
                        {!!  BBbutton2('unit',"blog_fields","blog_field","Extra Fields",['class'=>'btn btn-default pull-right select-field','data-type'=> "blog_field",'model'=>null]) !!}
                        {!!  BBbutton2('layouts',"blog_layouts","blog_layouts","Layout",['class'=>'btn btn-success pull-right select-field','data-type'=> "blog_layouts",'model'=>null]) !!}
                        {!!  BBbutton2('fields',"blog_fields","blog_fields","Fields",['class'=>'btn btn-warning pull-right select-field','data-type'=> "blog_fields",'model'=>null]) !!}
                    </div>
                </div>
            </div>

        </div>
        {{--all and singel settings--}}

        <div class="col-md-12">
            <div class="panel panelSettingData">
                <div class="panel-heading" role="tab" id="formBuilder">
                    <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion"
                                               href="#formBuilderCollapse" aria-expanded="true"
                                               aria-controls="formBuilderCollapse">
                            <i

                                    class="glyphicon glyphicon-chevron-right"></i>Form Builder</a></h4>
                </div>
                <div id="formBuilderCollapse" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="formBuilder">
                    <div class="panel-body form-builder-panel">
                        {!! form_render("blog_form") !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('resources::assests.deleteModal')
    @include('resources::assests.magicModal')
@stop
@section('CSS')

    <style>
        .panel-heading {
            z-index: 99999999
        }

        .panelSettingData {
            background-color: #85d8d7;
        }

        .panelSettingData .panel-heading {
            background-color: #1c1c1c;
        }

        .panelSettingData label {
            color: #000000;
        }

        .panelSettingData h4 a {
            color: #fff;
        }

        .panelSettingData h4 a:hover, .panelSettingData h4 a:focus {
            text-decoration: none;
        }

        .panelSettingData h4 a i {
            transition: all 0.3s;
            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            margin-right: 10px;
        }

        .panelSettingData h4 a[aria-expanded="true"] i {
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .settingBtn {
            background-color: #292929;
            color: #fff;
        }

        .settingBtn:hover, .settingBtn:focus {
            color: #fff;
        }

        .form-control {
            background-color: #000000 !important;
            border: none;
            color: #fff
        }
    </style>
@stop
@section('JS')
    {!! HTML::script("/js/UiElements/bb_styles.js?v.5") !!}
    <script>
        $(document).ready(function () {
            $("body").on("click","a[data-key=blog_fields]",function () {
                var id = $(this).data('value');
                $.ajax({
                    url: "{!! url('admin/blog/render-unit') !!}",
                    data: {id: id},
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    dataType: 'json',
                    success: function (data) {
                       $(".form-builder-panel").append(data.html);
                       $(".fields-box").append(data.field_html);

                    },
                    type: 'POST'
                });
            })
        })
    </script>
@stop