@push('scripts')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
@endpush

<div class="col-md-12">
  <div class="form-group">
    <label for="title" class="control-label">Title</label>

    <input id="title" type="text" class="form-control" name="title" value="{{ $petition->title }}" required autofocus>
  </div>

  <div class="form-group">
    <label for="summary" class="control-label">Summary</label>

    <textarea id="summary" type="text" class="form-control" name="summary">{{ $petition->summary }}</textarea>
  </div>

  <div class="form-group">
    <label for="body" class="control-label">Body</label>

    <textarea id="body" type="text" class="form-control" name="body" >{{ $petition->body }}</textarea>
    
  </div>

  <div class="form-group">
    <label for="thankyou" class="control-label">Thank You Message</label>

    <textarea id="thankyou" type="text" class="form-control" name="thankyou" >{{ $petition->thankyou }}</textarea>
  </div>

  <div class="form-group">
    <label for="emailsubject" class="control-label">Thank You Email Subject</label>

    <input id="emailsubject" type="text" class="form-control" name="emailsubject" value="{{ $petition->emailsubject }}" required >
  </div>

  <div class="form-group">
    <label for="emailbody" class="control-label">Thank You Email Body</label>

    <textarea id="emailbody" type="text" class="form-control" name="emailbody" >{{ $petition->body }}</textarea>
  </div>
</div>
 <script>
      window.addEventListener('load', function() {
        CKEDITOR.replace( 'body' ); 
        CKEDITOR.replace( 'emailbody' ); 
      });
      
  </script>