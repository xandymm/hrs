<!-- resources/views/reservations/show.blade.php -->

<h1>Reservation Details</h1>

<p><strong>Room Number:</strong> {{ $reservation->room_number }}</p>
<p><strong>Guest Name:</strong> {{ $reservation->guest_name }}</p>
<p><strong>Check-in Date:</strong> {{ $reservation->check_in_date }}</p>
<p><strong>Check-out Date:</strong> {{ $reservation->check_out_date }}</p>

<a href="{{ url('reservations/'.$reservation->id.'/edit') }}">Edit</a>

<form action="{{ url('reservations/'.$reservation->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
