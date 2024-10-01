@extends('admin.master.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Contact Information</div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Map</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->phone_number }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->address }}</td>
                                        <td>{{ strlen($contact->map) > 20 ? substr($contact->map, 0, 20) . '...' : $contact->map }}
                                        </td>
                                        <td>
                                            <a href="{{ route('contact-us-admin.edit', $contact) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('contact-us-admin.destroy', $contact) }}"
                                                method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this contact information?')">Delete</button>
                                            </form>
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
@endsection

