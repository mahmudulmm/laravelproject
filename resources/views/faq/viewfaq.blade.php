<x-master2>

  <div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>View Faq</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
              <li class="breadcrumb-item"> Faq</li>
              <li class="breadcrumb-item active"> View Faq</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->

            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <form class="theme-form">
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label" for="inputEmail3">Email</label>
                      <div class="col-sm-9">
                        <input class="form-control" id="inputEmail3" type="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label" for="inputPassword3">Password</label>
                      <div class="col-sm-9">
                        <input class="form-control" id="inputPassword3" type="password" placeholder="Password">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label" for="inputPassword3">Contact Number</label>
                      <div class="col-sm-9">
                        <input class="form-control" id="inputnumber" type="number" placeholder="Contact">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label" for="inputPassword3">Company name</label>
                      <div class="col-sm-9">
                        <input class="form-control" id="url" type="text" placeholder="Company name">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label" for="inputPassword3">Website</label>
                      <div class="col-sm-9">
                        <input class="form-control" id="Website" type="url" placeholder="Website">
                      </div>
                    </div>

                  </form>
                </div>
                <div class="card-footer">
                    <a class="btn btn-success" href="{{route('allfaq')}}" role="button">Back</a>
                </div>
              </div>
            </div>
          </div>

</x-master>
