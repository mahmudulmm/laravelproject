<x-master2>

    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>All Users</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">                                       <i data-feather="home"> </i></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">All Users</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Created At</th>
                          <th scope="col">Action </th>
                          <th scope="col">All Users : {{$total_users}}  </th>


                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $index => $user)
                        <tr>
                          <th scope="row">{{$users->firstitem()+$index}}</th>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->created_at->format('D-m-Y h:i:s A')}}</td>
                          <td> <a class="btn btn-primary" href="{{route('viewuser')}}" role="button"><span class="material-symbols-outlined">
                          visibility
                         </span></a>
                          <a class="btn btn-warning" href="{{route('edituser')}}" role="button"><span class="material-symbols-outlined">
                        edit_square
                       </span></a>
                        <a class="btn btn-danger" href="#" role="button"><span class="material-symbols-outlined">
                          delete
                        </span></a> </td>
                        </tr>
                        @endforeach
                      </tbody>

                    </table>
                    <div class="d-flex">
                  {!! $users->links() !!}
                   </div>


                  </div>
                </div>
              </div>



          </div>
          </div>
          </div>

</x-master>
