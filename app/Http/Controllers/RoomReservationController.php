<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomReservation;

class RoomReservationController extends Controller
{
    public function index()
    {
        $reservations = RoomReservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        RoomReservation::create($request->all());
        return redirect('reservations');
    }

    public function show($id)
    {
        $reservation = RoomReservation::findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = RoomReservation::findOrFail($id);
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $reservation = RoomReservation::findOrFail($id);
        $reservation->update($request->all());
        return redirect('reservations');
    }

    public function destroy($id)
    {
        $reservation = RoomReservation::findOrFail($id);
        $reservation->delete();
        return redirect('reservations');
    }
}
