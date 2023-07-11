@extends('layouts.master')

@section('content')
    <button
        id="save-User"
        class="fixed bottom-10 right-10 z-10 bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-full shadow-lg">
        +
    </button>
    <script>
        const saveUser = document.querySelector('#save-User');
        saveUser.addEventListener('click', function() {
            alert('Your changes have been saved!');
        });
    </script>
@endsection
