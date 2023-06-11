<!-- resources/views/reservations/edit.blade.php -->

<h1>Edit Reservation</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('reservation.update', ['id' => $reservation->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="room_id">Room ID:</label>
    <input type="number" name="room_id" id="room_id" value="{{ $reservation->room_id }}" required>


    <label for="customer_id">Customer ID:</label>
    <input type="number" name="customer_id" id="customer_id" value="{{ $reservation->customer_id }}" required>


    <label for="check_in_date">Check-in Date:</label>
    <input type="datetime" name="check_in_date" id="check_in_date" value="{{ $reservation->check_in_date }}" required>

    <label for="check_out_date">Check-out Date:</label>
    <input type="datetime" name="check_out_date" id="check_out_date" value="{{ $reservation->check_out_date }}"
        required>

    <button type="submit">Update</button>
</form>
