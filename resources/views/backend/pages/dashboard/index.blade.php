@extends('backend.layouts.app')
@section('title', 'Dahsboard')

@push('css')
<link href="{{ asset('backend/assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
    @include('backend.components.dashboard.data-table')
@endsection

@push('js')
	<script src="{{ asset('backend/assets/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        // Select all elements with the class 'deleteBtn' as a NodeList
        const deleteBtns = document.querySelectorAll('.deleteBtn');

        // Iterate over the NodeList with .forEach
        deleteBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                console.log('clicked');

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        swalWithBootstrapButtons.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire({
                            title: "Cancelled",
                            text: "Your imaginary file is safe :)",
                            icon: "error"
                        });
                    }
                });
            });
        });
    </script>
@endpush
