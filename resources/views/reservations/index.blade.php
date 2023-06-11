<!-- resources/views/reservations/index.blade.php -->

<h1>Reservations</h1>

<a href="{{ url('reservations/create') }}">Create Reservation</a>

<table>
    <thead>
        <tr>
            <th>Room Number</th>
            <th>Guest Name</th>
            <th>Check-in Date</th>
            <th>Check-out Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->room_number }}</td>
                <td>{{ $reservation->guest_name }}</td>
                <td>{{ $reservation->check_in_date }}</td>
                <td>{{ $reservation->check_out_date }}</td>
                <td>
                    <a href="{{ url('reservations/'.$reservation->id) }}">View</a>
                    <a href="{{ url('reservations/'.$reservation->id.'/edit') }}">Edit</a>
                    <form action="{{ url('reservations/'.$reservation->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
