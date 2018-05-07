@extends('layouts.app')

@section('content')
<br><br><br>
<div class="row">
<div class="col-1"></div>
<div class="col-10">
<div class="card text-white bg-info mb-3" style="width:100%">
    <div class="card-header">Donation Form</div>
    <div class="card-body">
    <form>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Item Name</label>
    <input type="text" class="form-control" id="exampletextEmail1" placeholder="Enter Item Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Enter a small description about an item you are donating.</textarea>
  </div>
  <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Item Picture</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Item Bag</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <br>
  <button type="button" class="btn btn-primary btn-block">Post</button>
  
</form>
    </div>
</div>
</div>
</div>
</div>
@endsection

