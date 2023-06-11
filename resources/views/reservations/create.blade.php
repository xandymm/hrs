<!-- resources/views/reservations/create.blade.php -->

<h1>Create Reservation</h1>


@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('reservation.store') }}" method="POST">
    @csrf

    <label for="room_id">Room ID:</label>
    <input type="number" name="room_id" id="room_id" value="{{ old('room_id') }}" required>


    <label for="customer_id">Customer ID:</label>
    <input type="number" name="customer_id" id="customer_id" value="{{ old('customer_id') }}" required>


    <label for="check_in_date">Check-in Date:</label>
    <input type="datetime" name="check_in_date" id="check_in_date" value="{{ old('check_in_date') }}" required>

    <label for="check_out_date">Check-out Date:</label>
    <input type="datetime" name="check_out_date" id="check_out_date" value="{{ old('check_out_date') }}" required>

    <button type="submit">Crate</button>
