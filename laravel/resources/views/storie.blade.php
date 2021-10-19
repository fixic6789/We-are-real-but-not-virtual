<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Cover</th>
            <th>Images</th>
        </tr>
    </thead>
    <tbody>
        <td>{{ $storie->title }}</td>
        <td>{{ $storie->body }}</td>
        <td>
            <img width="50px" src="{{ asset('covers').'/'.$storie->cover }}" class="img-responsive">
        </td>
        <td>
            @foreach ($imagesNames as $image)
            <img width="50px" src="{{ asset('images').'/'.$image }}" class="img-responsive">
            @endforeach
        </td>
    </tbody>
</table>