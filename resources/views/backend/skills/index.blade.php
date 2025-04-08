@extends('backend.layouts.master', ['page_slug' => 'skills'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success d-flex align-items-center justify-content-between" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="cart-title">Skills List</h4>
                    <a href="{{ route('admin.skills.create') }}" class="btn btn-primary btn-sm">Add New</a>
                </div>
                <div class="card-body">
                    <table class="table table-responsive table-striped datatable">
                        <thead>
                            <tr>
                                <th>{{ __('SL') }}</th>
                                <th>{{ __('Skills Name') }}</th>
                                <th>{{ __('Percentage') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $key => $skill)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $skill->name }}</td>
                                    <td>{{ $skill->percentage }}%</td>
                                    <td>
                                        <a href="{{ route('admin.skills.edit', $skill->id) }}"
                                            class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="{{ route('admin.skills.show', $skill->id) }}"
                                            class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                        <form id="delete-form-{{ $skill->id }}"
                                            action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST"
                                            class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm"
                                                onclick="handleDelete(event, {{ $skill->id }})">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
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
@endsection

@push('js')
    <script>
        function handleDelete(e, id) {
            e.preventDefault(); // Prevent default button behavior
            console.log(id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form programmatically
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
@endpush
