<form class="form-horizontal" role="form" method="POST" action="{{ URL::route('petition.sign', $petition->id) }}">
  {{ method_field('PUT') }}

  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    
    <div class="col-sm-10">
      <input id="name" type="text" class="form-control" name="name" required autofocus placeholder="Name">
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>

    <div class="col-sm-10">
      <input id="email" type="email" class="form-control" name="email" required autofocus placeholder="Email Address">
    </div>
  </div>
  
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone</label>

    <div class="col-sm-10">
      <input id="phone" type="telephone" class="form-control" name="phone" required autofocus placeholder="Phone Number">
    </div>
  </div>

  <div class="col-sm-offset-2">
    <button type="submit" class="btn btn-lg btn-primary" value='Sign'>Sign</button>
  </div>

  </div>

</form>