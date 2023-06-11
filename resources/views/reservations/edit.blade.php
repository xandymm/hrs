<!-- resources/views/reservations/edit.blade.php -->

<h1>Edit Reservation</h1>

<form action="{{ url('reservations/'.$reservation->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="room_number">Room Number:</label>
    <input type="text" name="room_number" id="room_number" value="{{ $reservation->room_number }}" required>

    <label for="guest_name">Guest Name:</label>
    <input type="text" name="guest_name" id="guest_name" value="{{ $reservation->guest_name }}" required>

    <label for="check_in_date">Check-in Date:</label>
    <input type="date" name="check_in_date" id="check_in_date" value="{{ $reservation->check_in_date }}" required>

    <label for="check_out_date">Check-out Date:</label>
    <input type="date" name="check_out_date" id="check_out_date" value="{{ $reservation->check_out_date }}" required>

    <button type="submit">Update</button>
</form>
