<div class="form-group">
  <label for="title" class="control-label">Title</label>

  <input id="title" type="text" class="form-control" name="title" value="{{ $petition->title }}" required autofocus>
</div>

<div class="form-group">
  <label for="summary" class="control-label">Summary</label>

  <textarea id="summary" type="text" class="form-control" name="summary" autofocus>{{ $petition->summary }}</textarea>
</div>

<div class="form-group">
  <label for="body" class="control-label">Body</label>

  <textarea id="body" type="text" class="form-control" name="body" autofocus>{{ $petition->body }}</textarea>
</div>

<div class="form-group">
  <label for="thankyou" class="control-label">Thank You Message</label>

  <textarea id="thankyou" type="text" class="form-control" name="thankyou" autofocus>{{ $petition->thankyou }}</textarea>
</div>

<div class="form-group">
  <label for="emailsubject" class="control-label">Thank You Email Subject</label>

  <input id="emailsubject" type="text" class="form-control" name="emailsubject" value="{{ $petition->emailsubject }}" required autofocus>
</div>

<div class="form-group">
  <label for="emailbody" class="control-label">Thank You Email Body</label>

  <input id="emailbody" type="text" class="form-control" name="emailbody" value="{{ $petition->emailbody }}" required autofocus>
</div>