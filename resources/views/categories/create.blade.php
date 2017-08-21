@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-xs-12 ">

    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Add Category</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">

      <form action="/categories/" method="POST" data-toggle="validator">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <div class="form-group has-feedback">
          <label for="name" class="control-label">Name:</label>
          <input type="text" name="name" class="form-control" id="name" maxlength="50" placeholder="Enter a Name:" required>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors"></div>
        </div>

        <div class="form-group has-feedback">
          <label for="description" class="control-label">Description:</label>
          <textarea name="description" id="description" class="form-control" rows="8" cols="80" placeholder="Enter a description:" required></textarea>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors"></div>
        </div>

        <button class="btn btn-primary">Create</button>

      </form>
    </div>
  </div>
</div>
</div>
@stop
