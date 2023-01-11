@extends('projects.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="margin: 20px;">
                    <div class="card-header">
                        <h2>Projektkezelő</h2>
                    </div>
                    <div class="card-body">
                        @if (Session::has('flash_message'))
                            <p class="alert alert-info">{{ Session::get('flash_message') }}</p>
                        @endif
                        <a href="{{ url('/projects/create') }}" class="btn btn-success btn-sm" title="Új projekt">
                            <i class="fa-solid fa-plus"></i>
                            Új projekt
                        </a>
                        <form action="{{ url('projects') }}" method="post">
                            <label>Státusz: </label>
                            <select name="filter" id="filter" onchange="{{ }}">
                                <option value="Fejlesztésre vár">Fejlesztésre vár</option>
                                <option value="Folyamatban">Folyamatban</option>
                                <option value="Kész">Kész</option>
                            </select>
                        </form>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Név</th>
                                        <th>Státusz</th>
                                        <th>Kapcsolattartók száma</th>
                                        <th>Műveletek</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                        @php
                                            $count = DB::table('contacts')
                                                ->where('project_id', '=', $project->id)
                                                ->get()
                                                ->count();
                                        @endphp
                                        <tr>
                                            <td>{{ $project->name }}</td>
                                            <td>{{ $project->status }}</td>
                                            <td>{{ $count }}</td>
                                            <td>
                                                <a href="{{ url('/projects/' . $project->id . '/edit') }}"
                                                    title="Szerkesztés">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                        Szerkesztés
                                                    </button>
                                                </a>
                                                <form method="POST" action="{{ url('/projects/' . $project->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Törlés"><i
                                                            class="fa-solid fa-trash" aria-hidden="true"></i>
                                                        Törlés</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="paginate">
                                {{ $projects->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
