<table>
    <thead>
        <th>id</th>
        <th>movies</th>
        <th>price</th>
        <th>time</th>
        <th>center</th>
        <th>code</th>
        <th>user_id</th>
        <th>created_at</th>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item-> id}}</td>
            <td>{{ $item-> movies}}</td>
            <td>{{ $item-> price}}</td>
            <td>{{ $item-> center}}</td>
            <td>{{ $item-> time}}</td>
            <td>{{ $item-> code}}</td>
            <td>{{ $item-> user_id}}</td>
            <td>{{ $item-> created_at}}</td>
       </tr>
        @endforeach
    </tbody>
</table>

<a href="/admin/tickets/create">create</a>