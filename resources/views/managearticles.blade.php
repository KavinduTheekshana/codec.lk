<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Articles') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->





                <div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="mt-2 text-2xl">
                        Manage Articles
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
                                            <th>Title</th>

                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>

                                    <tbody>

                                        @foreach($articles as $article)
                                        <tr>

                                            <td>{{$article->id}}</td>
                                            <td>{{$article->title}}</td>

                                            <td>
                                                @if (strlen(strip_tags($article->description)) > 30)
                                                {!! substr(strip_tags($article->description), 0, 30) !!} ...
                                                @else
                                                {!! $article->description !!}
                                                @endif
                                            </td>
                                            <td><img class="h-10 w-10 rounded-full object-cover" src="{{$article->image}}" /></td>

                                            <td> @if($article->status)
                                                <span class="badge badge-md badge-success">Active</span></a>
                                                @else
                                                <span class="badge badge-md badge-danger">Deactivated</span></a>
                                                @endif</td>


                                            <td>
                                            <a title="Show" href="project_show/{{$article->id}}"><i class="far fa-eye text-dark"></i></a>
                                            &nbsp;&nbsp;
                                                @if($article->status)
                                                <a href="project_diactivate/{{$article->id}}"><i class="far fa-lock text-danger"></i></a>
                                                @else
                                                <a href="project_activate/{{$article->id}}"><i class="far fa-lock-open text-success"></i></a>
                                                @endif


                                                &nbsp;&nbsp;
                                                <a href="project_edit/{{$article->id}}"><i class="far fa-edit text-dark"></i></a>

                                                &nbsp;&nbsp;
                                                <button type="submit" onclick="sweet('{{$article->id}}')" href=""><i class="far fa-trash-alt text-warning"></i></button>
                                                <!-- <a href="project_delete/{{$article->id}}"><i class="far fa-trash-alt text-warning"></i></a> -->
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
                                            url: "{{ url('article_delete')}}" + '/' + id,
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