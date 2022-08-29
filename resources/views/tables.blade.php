<x-app>
        <x-side-nav/>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            {{-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> --}}
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
</x-app>