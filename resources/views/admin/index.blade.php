<x-admin-master>
    @section('content')
        <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
        <h4>User Name: {{auth()->user()->name}}</h4>
        <h4>Email Id: {{auth()->user()->email}}</h4>
        <h4>Id created on: {{auth()->user()->created_at->toDateString()}}</h4>
    @endsection
</x-admin-master>>
