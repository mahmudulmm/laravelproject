<x-master2>

    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>All Faq</h3>
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

              <div class="col-sm-8">
                <div class="py-3">
                  @if(session()->has('deletete'))
                  <div class="alert alert-danger "  role="alert">
                        {{session()->get('deletete')}}</a>
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
                              <a class="btn btn-primary" href="{{route('viewfaq')}}" role="button"><span class="material-symbols-outlined">
                            visibility
                             </span></a>
                             <a class="btn btn-warning" href="{{route('editfaq',['id' => $faq->id])}}" role="button"><span class="material-symbols-outlined">
                           edit_square
                          </span></a>

                          <a class="btn btn-danger" href="{{route('destroy', ['id' => $faq->id])}}" role="button"><span class="material-symbols-outlined">
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

              <div class="col-sm-4 right">

                <div class="py-3">
                  @if(session()->has('demo'))
                  <div class="alert alert-success "  role="alert">
                        {{session()->get('demo')}}</a>
                          </div>

                   @endif
                </div>
                <div class="card">

                  <div class="card-body">

                    <form  action="{{route('store')}}"  method="POST">

                       @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Faq Question</label>

                        <input type="text" name="faq_question"  id="faq_question" class="form-control @error('faq_question') is-invalid @enderror" value="{{ old('faq_question') }}" placeholder="Faq Question">

                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Faq Answer</label>

                        <input class="form-control @error('faq_answer') is-invalid @enderror" name="faq_answer" id="faq_answer"   placeholder="Faq Answer" value="{{ old('faq_answer') }}" rows="3">
                       </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


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
