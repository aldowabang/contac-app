<div>
    <table class="table w-full">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->address }}</td>
                <td>
                    <div class="gap-2">
                        <button class="btn btn-sm btn-primary gap-2">
                            <x-tabler-edit class="size-5"></x-tabler-edit>
                            Edit
                        </button>
                        <button class="btn btn-sm btn-error gap-2">
                            <x-tabler-trash class="size-5"></x-tabler-trash>
                            Delete
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
