<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Message') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->

                <div>
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="mt-2 text-2xl">
                            {{$contacts->subject}}
                            @if($contacts->status)
                            <span class="badge badge-md badge-info">Read</span></a>
                            @else
                            <span class="badge badge-md badge-warning">Unread</span></a>
                            @endif</td>
                        </div>
                    </div>

                    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                        <div class="p-6 border-t border-gray-200">

                            <form role="form" method="" action="" enctype="multipart/form-data">


                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$contacts->name}}" disabled>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" value="{{$contacts->email}}" name="description" disabled>
                                </div>

                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" value="{{$contacts->subject}}" name="subject" disabled>
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$contacts->message}}</textarea>
                                </div>
                            </form>


                            @if($contacts->status)
                            <a href="{{ url('mark_as_unread/'.$contacts->id) }}" class="btn btn-warning">Mark As Unread</a>
        
                            @else
                            <a href="{{ url('mark_as_read/'.$contacts->id) }}" class="btn btn-info">Mark As Read</a>
                            @endif

                            
                            <a href="{{ url('message_delete2/'.$contacts->id) }}" class="btn btn-danger">Delete</a>





                        </div>








                    </div>







                </div>
            </div>
        </div>

</x-app-layout>