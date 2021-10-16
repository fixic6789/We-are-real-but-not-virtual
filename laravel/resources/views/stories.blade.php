<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Cover</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
@foreach ($stories as $storie)
        <td>
            <img width="50px" src="{{ asset('covers').'/'.$storie->cover }}" class="img-responsive">
        </td>
        <td>
            <h1>{{ $storie->title }}</h1>
        </td>
        <td>
            <a href="{{ route('storie', $storie->id) }}">View</a>
        </td>
    </tbody>
@endforeach
</table>