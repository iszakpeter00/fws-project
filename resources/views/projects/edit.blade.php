@extends('projects.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Projekt szerkesztése</div>
        <div class="card-body">
            <form action="{{ url('projects/' . $project->id) }}" method="post">
                @csrf
                @method('PATCH')
                <label>Név</label>
                <input type="text" name="name" id="name" value="{{ $project->name }}" class="form-control">
                <label>Leírás</label>
                <input type="text" name="desc" id="desc" value="{{ $project->desc }}" class="form-control">
                <label>Státusz</label>
                <select name="status" id="status" class="form-control" value="{{ $project->status }}">
                    <option value="Fejlesztésre vár">Fejlesztésre vár</option>
                    <option value="Folyamatban">Folyamatban</option>
                    <option value="Kész">Kész</option>
                </select>
                <label>Kapcsolattartó neve</label>
                <input type="text" name="desc" id="desc" value="{{-- $project->contacts()->get()->first()->name --}}" class="form-control">
                <label>Kapcsolattartó e-mail címe</label>
                <input type="text" name="desc" id="desc" value="{{-- $project->contacts()->get()->first()->email --}}" class="form-control">
                <input type="submit" value="Mentés" class="btn btn-success">
            </form>
        </div>
    </div>

@stop
