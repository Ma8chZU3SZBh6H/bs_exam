<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content" action="{{route('company')}}" method="post">
      @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">code</label>
            <input name="code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">pvm</label>
            <input name="pvm" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">address</label>
            <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone</label>
            <input name="phone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">does</label>
            <input name="does" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ceo</label>
            <input name="ceo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" type="button" class="btn btn-primary">Add</button>
      </div>
    </form>
  </div>
</div>