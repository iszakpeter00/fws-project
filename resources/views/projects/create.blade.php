@extends('projects.layout')
@section('content')
    <div class="card" style="margin: 20px;">
        <div class="card-header">
            Projekt létrehozása
        </div>
        <div class="card-body">
            <form action="{{ url('projects') }}" method="post">
                @csrf
                <label>Név</label>
                <input type="text" name="name" id="name" class="form-control">
                <label>Leírás</label>
                <input type="textarea" name="desc" id="desc" class="form-control">
                <label>Státusz</label>
                <select name="status" id="status" class="form-control">
                    <option value="Fejlesztésre vár">Fejlesztésre vár</option>
                    <option value="Folyamatban">Folyamatban</option>
                    <option value="Kész">Kész</option>
                </select>
                <label>Kapcsolattartó neve</label>
                <input type="text" name="contacts[name]" id="contacts[name]" class="form-control">
                <label>Kapcsolattartó e-mail címe</label>
                <input type="text" name="contacts[email]" id="contacts[email]" class="form-control">
                <input type="submit" value="Mentés" class="btn btn-success">
            </form>
        </div>
    </div>
@stop
