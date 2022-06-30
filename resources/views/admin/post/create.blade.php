<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formCreate" class="needs-validation" enctype="multipart/form-data" novalidate>
      {{ csrf_field() }}  {{ method_field('POST') }}
      <input type="hidden" id="id" name="id">
      <div class="modal-body">
        <div class="form-group">
          <label for="category_id">Category</label>
          <select class="form-control" name="category_id" id="cat" required>
            @foreach($categories as $c)
              <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
          </select>
          <div class="valid-feedback" style="text-align: left;">
            Post's category has been selected.
          </div>
          <div class="invalid-feedback" style="text-align: left;">
            Post's category hasn't been selected.
          </div>
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="ti" placeholder="Post's title" required>
          <div class="valid-feedback" style="text-align: left;">
            Post's title has been filled.
          </div>
          <div class="invalid-feedback" style="text-align: left;">
            Post's title hasn't been filled.
          </div>
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control ckeditor" name="description" id="de" rows="3" placeholder="Post's description" required></textarea>
          <div class="valid-feedback" style="text-align: left;">
            Post's description has been filled.
          </div>
          <div class="invalid-feedback" style="text-align: left;">
            Post's description hasn't been filled.
          </div>
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control-file" name="image" id="img">
          <div class="valid-feedback" style="text-align: left;">
            Post's image has been filled.
          </div>
          <div class="invalid-feedback" style="text-align: left;">
            Post's image hasn't been filled.
          </div>
        </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" onclick="createPost()" class="btn btn-primary">Save</button> -->
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    </div>
  </div>
</div>