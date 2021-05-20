@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Event List') }} <a href="{{ route('addevent')}}" style="float: right;" class="btn btn-info">Add Event</a> </div>

                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif

                <div class="card-body">
                    <table>
                          <tr>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Contact Person Name</th>
                            <th>Contact Person Number</th>
                            <th>Email</th>
                            <th>Event Date</th>
                            <th>Event Time</th>
                            <th>Event Types</th>
                            <th colspan="2">Action</th>
                          </tr>
                          @foreach($events as $event)
                          <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->event_name }}</td>
                            <td>{{ $event->contact_person_name }}</td>
                            <td>{{ $event->contact_person_number }}</td>
                            <td>{{ $event->email }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td>{{ $event->event_time }}</td>
                            <td>{{ $event->event_type }}</td>
                            <td><a href="{{route('editevent',$event->id)}}">Edit</a></td>
                            <td><button class="deleteRecord" data-id="{{ $event->id }}" onclick="return confirm('Are you sure?')">Delete</button></td>
                          </tr>
                          @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
    <script>
        $(document).ready(function() {
        $(".deleteRecord").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "eventdelete/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            console.log("it Works");
        }
    });
   
});
        });
    </script>
@endsection



