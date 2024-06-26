@extends('layouts.dashLayout.app')

@section('page_content')

<div class="container">


            <div class="card col-12">
                <div class="card-body pa-0">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="messagessTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>subject</th>
                                        <th>message</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $contact)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>
                                            <div class="button-list">




                                                <form action="{{ route('dashboard.contacts.destroy', $contact->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>

                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


</div>
</div>


@endsection
