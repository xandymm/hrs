<!-- resources/views/reservations/create.blade.php -->

<h1>Create Reservation</h1>

<form action="{{ url('reservations') }}" method="POST">
    @csrf
    <label for="room_number">Room Number:</label>
    <input type="text" name="room_number" id="room_number" required>

    <label for="guest_name">Guest Name:</label>
    <input type="text" name="guest_name" id="guest_name" required>

    <label for="check_in_date">Check-in Date:</label>
    <input type="date" name="check_in_date" id="check_in_date" required>

    <label for="check_out_date">Check-out Date:</label>
    <input type="date" name="check_out_date" id="check_out_date" required>

    <button type="submit">Create</button>
</form>
