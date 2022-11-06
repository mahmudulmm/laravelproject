<x-master2>

  <div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3> Edit Faqs </h3>

          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
              <li class="breadcrumb-item"> Faq</li>
              <li class="breadcrumb-item active"> Edit Faq</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->

            <div class="col-sm-12">
              <div class="py-3">
                @if(session()->has('update'))
                <div class="alert alert-success "  role="alert">
                      {{session()->get('update')}}</a>
                        </div>

                 @endif
              </div>
              <div class="card">
                <div class="card-body">
                  <form  action="{{route('updatefaq',$faq->id)}}"  method="POST">

                     @csrf
                     @method('put')
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Faq Question</label>

                      <input type="text" name="faq_question"  id="faq_question" class="form-control " value="{{$faq->faq_question}}" placeholder="Faq Question" required>

                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Faq Answer</label>

                        <input  class="form-control" name="faq_answer" id="faq_answer"   placeholder="Faq Answer" value="{{$faq->faq_answer}}" rows="3" required>
                     </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>

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
