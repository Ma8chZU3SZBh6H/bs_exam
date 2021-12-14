<div class="card" style="width: 18rem;">
            <div class="card-body">
              <div class="d-flex  gap-3 place-items-center justify-content-between">
                  <h5 class="card-title fw-bold">Company</h5>
                  <div class="d-flex gap-3">
                    <form class="d-flex">
                        <button class="btn btn-outline-primary" type="submit">Edit</button>
                    </form>
                    <form action="{{route('company.delete', $company)}}" method="post" class="d-flex">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                </div>
              </div>
              <ol class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold">Code</div>
                    {{$company->code}}
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Pvm</div>
                      {{$company->pvm}}
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Address</div>
                      {{$company->address}}
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Phone</div>
                      {{$company->phone}}
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">El. pašto adresas</div>
                      {{$company->email}}
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Veikla</div>
                      {{$company->does}}
                    </div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                      <div class="fw-bold">Vadovas</div>
                        {{$company->ceo}}
                    </div>
                  </li>
              </ol>
            </div>
          </div>