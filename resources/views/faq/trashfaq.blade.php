<x-master2>

    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>All Trash Faq</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">                                       <i data-feather="home"> </i></a></li>
                    <li class="breadcrumb-item">Faq</li>
                    <li class="breadcrumb-item active">All Faq</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">

            <div class="row">

              <div class="col-sm-12">
                <div class="py-3">
                  @if(session()->has('restore'))
                  <div class="alert alert-success "  role="alert">
                        {{session()->get('restore')}}</a>
                          </div>

                   @endif
                </div>
                <div class="py-3">
                  @if(session()->has('forcedelete'))
                  <div class="alert alert-danger "  role="alert">
                        {{session()->get('forcedelete')}}</a>
                          </div>

                   @endif
                </div>
                <div class="card">

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Faq Question</th>
                          <th scope="col">Faq Answer</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($faqs as $index=>$faq)
                        <tr>
                          <td scope="row">{{$faqs->firstitem()+$index}}</td>
                          <td>{{$faq->faq_question}}</td>
                          <td>{{$faq->faq_answer}}</td>
                            <td>
                             <a class="btn btn-primary" href="{{route('restore', ['id' => $faq->id])}}" role="button"><span class="material-symbols-outlined">
                               settings_backup_restore
                          </span></a>

                          <a class="btn btn-danger" href="{{route('forcedelete', ['id' => $faq->id])}}" role="button"><span class="material-symbols-outlined">
                            delete
                          </span></a>
                        </tr>
                          @endforeach
                      </tbody>
                    </table>
                    <div class="d-flex">
                  {!! $faqs->links() !!}
                   </div>
                  </div>
                </div>
              </div>

          </div>
          </div>
          </div>
             <script type="text/javascript">
               window.setTimeout(function() {
                 $(".alert").fadeTo(400, 0).slideUp(400, function(){
                   $(this).remove();
                });
                }, 3000);
             </script>
</x-master>
