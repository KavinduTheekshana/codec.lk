<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Projects') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->





                <div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="mt-2 text-2xl">
                            Update Project
                        </div>
                    </div>

                    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                        <div class="p-6 border-t border-gray-200">

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif



                            <form role="form" method="POST" action="/updateproject" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="id" class="form-control" hidden value="{{$projects->id}}">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$projects->title}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Location</label>
                                        <input type="text" name="location" class="form-control" value="{{$projects->location}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$projects->description}}">
                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="inputState">Status</label>
                                        <select id="inputState" name="status" class="form-control">

                                            @if($projects->status===0)
                                            <option value="0" selected>Hold</option>
                                            <option value="0">Hold</option>
                                            <option value="1">Ongoing</option>
                                            <option value="2">Completed</option>
                                            @elseif($projects->status===1)
                                            <option value="0">Hold</option>
                                            <option value="1" selected>Ongoing</option>
                                            <option value="2">Completed</option>
                                            @elseif($projects->status===2)
                                            <option value="0">Hold</option>
                                            <option value="1">Ongoing</option>
                                            <option value="2" selected>Completed</option>
                                            @else
                                            <option selected>Choose...</option>
                                            <option value="0">Hold</option>
                                            <option value="1">Ongoing</option>
                                            <option value="2">Completed</option>
                                            @endif
                                          
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">

                                    </div>
                                    <!-- <div class="form-group col-md-2">
                                        <label>Image</label>
                                        <input type="file" name="product_image" id="input-file-now" class="dropify" />
                                    </div> -->
                                </div>
                              
                                <div class="form-group col-md-5" style="padding-left: 1px;">
                                    <label>Image</label>
                                    <img class="h-20 w-20 rounded-full object-cover" src="{{ asset($projects->image) }}" />
                                    <br>
                                    <input type="file" name="image" id="input-file-now" class="dropify" />
                                </div>



                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>







                            <!-- <div class="container mt-5">
                                <h2 class="mb-4">Laravel 7 Yajra Datatables Example</h2>
                                <table class="table table-bordered yajra-datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Phone</th>
                                            <th>DOB</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div> -->







                        </div>





                    </div>






                    <!-- ............................ -->
                </div>
            </div>
        </div>
</x-app-layout>