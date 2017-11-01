<div class="form-group col-md-12">
    <label class="col-md-2 control-label" for="title">Post title</label>
    <div class="col-md-6">
        {!! Form::text('title',null,['class' => 'form-control input-md','placeholder' => 'Enter Post title']) !!}
    </div>
</div>
<div class="form-group col-md-12">
    <label class="col-md-2 control-label" for="post-desc">Post Description</label>
    <div class="col-md-6">
        {!! Form::textarea('description',null,['id' => 'post-desc','class' => 'form-control input-md','placeholder' => 'Enter Post Description']) !!}
    </div>
</div>
<div class="form-group col-md-12">
    <label class="col-md-2 control-label" for="post-desc">Post Image</label>
    <div class="col-md-6">
        {!! Form::file('image',['class' => 'form-control input-md']) !!}
    </div>
</div>
<div class="form-group col-md-12">
    <label class="col-md-2 control-label" for="post-desc">Post Status</label>
    <div class="col-md-6">
        {!! Form::select('status',['draft' => 'Draft','pending' => 'Pending','published' => 'Published'],null,['class' => 'form-control input-md']) !!}
    </div>
</div>

<div class="form-group col-md-12">
    <a href="#" class="btn btn-primary">Submit</a>
</div>