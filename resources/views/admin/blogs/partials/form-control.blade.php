@csrf
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <input type="text" name="title" class="form-control basic-usage" placeholder="Judul">
        </div>
        <div class="form-group">
            <label for="">Slug</label>
            <input id="permalink" class="form-control" name="slug" type="text" name="" placeholder="Slug..." readonly>
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea id="" class="form-control" name="description" rows="15"></textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Hello</h6>
            </div>
            <div class="card-body">
                <input type="file" class="form-control" name="images">
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">{{$title ?? 'update'}}</button>
            </div>
        </div>
    </div>
</div>