<x-app>
    <x-side-nav/>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Total Number Of Certificate</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    {{number_format(count($certificates))}}
                                    
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <x-flash-message/>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Certificate Table
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th class="mr-5">Image</th>
                                        <th class="mr-5">First Name</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <th>Last Name</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <th>email</th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <th>course</th>&nbsp;&nbsp;&nbsp;
                                        <th>Date</th>&nbsp;&nbsp;&nbsp;
                                        <th>Certificate No</th>&nbsp;&nbsp;&nbsp;
                                        <th>Action</th>&nbsp;&nbsp;&nbsp;
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($certificates as $certificate)
                                    <tr>
                                        {{-- <td>{{$certificate->id}}</td> --}}
                                        <td>
                                            <img src="{{asset($certificate->image ? asset('storage/' . $certificate->image) : asset('asset/img/no-image.png'))}}" class="passport" alt="user1">
                                        </td>
                                        <td>{{$certificate->first_name}}</td>
                                        <td>{{$certificate->last_name}}</td>
                                        <td>{{$certificate->email}}</td>
                                        <td>{{$certificate->course}}</td>
                                        <td>{{$certificate->date}}</td>
                                        <td>{{$certificate->certificate_no}}</td>
                                        <td> 
                                            <a class="btn btn-success" href="{{ route('edit-certificate',$certificate->id) }}">Edit</a> 
                                        </td>
                                        <td>
                                            <form action="/certificate/{{$certificate->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" href="">Delete</button> 
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <x-footer/>
        </div>
    </div>
</x-app>
