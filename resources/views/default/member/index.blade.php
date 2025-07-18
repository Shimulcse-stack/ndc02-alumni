@extends('default.layout')
@section('content')
<table class="table table-border">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data['rows'] as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone }}</td>
            <td>{{ $row->status }}</td>
            <td>
                <a href="{{ route('member.profile', $row->id) }}" class="btn btn-info">Profile</a>
                <a href="{{ route('member.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                @if ($row->status == 'active')
                <a href="{{ route('member.suspend', $row->id) }}" class="btn btn-danger">Suspend</a>
                @else
                <a href="{{ route('member.activate', $row->id) }}" class="btn btn-success">Activate</a>
                @endif
                <form action="{{ route('member.destry', $row->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are You Sure')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
        @if(!empty($data['rows']))
            {{ $data['rows']->links() }}
        @endif
</div>
@endsection


