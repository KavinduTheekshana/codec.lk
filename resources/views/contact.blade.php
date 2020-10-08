<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->





                <div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="mt-2 text-2xl">
                        Contacts
                        </div>
                    </div>

                    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                        <div class="p-6 border-t border-gray-200">







                            <div class="container">
                                @if (session('project_diactivate_status'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('project_diactivate_status') }}
                                </div>
                                @endif

                                @if (session('project_activate_status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('project_activate_status') }}
                                </div>
                                @endif


                                <table class="table table-bordered yajra-datatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>

                                    <tbody>

                                        @foreach($contacts as $contact)
                                        <tr>

                                            <td>{{$contact->id}}</td>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>
                                                @if (strlen(strip_tags($contact->message)) > 30)
                                                {!! substr(strip_tags($contact->message), 0, 30) !!} ...
                                                @else
                                                {{$contact->message}}
                                                @endif
                                            </td>


                                            <td> @if($contact->status)
                                                <span class="badge badge-md badge-info">Read</span></a>
                                                @else
                                                <span class="badge badge-md badge-warning">Unread</span></a>
                                                @endif</td>


                                            <td>


                                                @if($contact->status)
                                                <a href=""><i class="fa fa-envelope-open text-warning"></i></a>
                                                @else
                                                <a href=""><i class="fa fa-envelope text-info"></i></a>
                                                @endif


                                                &nbsp;&nbsp;
                                                <a href=""><i class="far fa-eye text-dark"></i></a>

                                                &nbsp;&nbsp;
                                                <button type="submit" onclick="sweet('{{$contact->id}}')" href=""><i class="far fa-trash-alt text-danger"></i></button>
                                                <!-- <a href="project_delete/{{$contact->id}}"><i class="far fa-trash-alt text-warning"></i></a> -->
                                            </td>




                                        </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>







                        </div>








                    </div>


                    <script type="text/javascript">
                        $(function() {

                            var table = $('.yajra-datatable').DataTable({});

                        });
                    </script>


                    <script>
                        function sweet(id) {

                            swal({
                                    title: "Are you sure?",
                                    text: "Once deleted, you will not be able to recover this imaginary file!",
                                    icon: "warning",
                                    buttons: true,
                                    dangerMode: true,

                                })
                                .then((willDelete) => {
                                    if (willDelete) {

                                        $.ajax({
                                            url: "{{ url('')}}" + '/' + id,
                                            type: "GET",
                                            success: function() {
                                                swal({
                                                        title: "Success!",
                                                        text: "Poof! Your imaginary file has been deleted!",
                                                        type: "success",
                                                    }).then(
                                                    function() {
                                                        location.reload();
                                                    });
                                            },
                                            error: function() {
                                                swal({
                                                    title: 'Opps...',
                                                    text: 'data.message',
                                                    type: 'error',
                                                    timer: '1500'
                                                })
                                            }
                                        })







                                        // swal("Poof! Your imaginary file has been deleted!", {
                                        //     icon: "success",
                                        // });
                                    } else {
                                        swal("Your imaginary file is safe!", {
                                            icon: "info",
                                        });

                                    }
                                });
                        };
                    </script>

                    <!-- ............................ -->
                </div>
            </div>
        </div>
</x-app-layout>