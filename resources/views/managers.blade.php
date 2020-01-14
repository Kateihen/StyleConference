@extends('layouts.app')

@section('content')
    <section class="hero container">
        <a href="/register" class="btn btn-alt">Register New Manager</a><!--
        --><<a href="/admin" class="btn btn-alt">List Of Visitors</a>
    </section>

    <div class="row-alt">
        <section class="container sub">
            <p>Manager: {{ $admin->name }}</p>
        </section>
    </div>

    <section class="row row-another">
        <div class="container">
            <h5>List of Managers:</h5>

            @foreach($managers as $manager)
              
                <table>
                    <thead>
                        <tr>
                            <th scope="row">
                                Name:
                            </th>
                            <td class="schedule-offset" colspan="2">{{ $manager->name }}</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th scope="row">
                                ID:
                            </th>
                        <td class="schedule-offset" colspan="2">{{ $manager->id }}</td>
                        </tr>

                        <tr>
                            <th scope="row">
                                Email:
                            </th>
                        <td class="schedule-offset" colspan="2">{{ $manager->email }}</td>
                        </tr>

                        <tr>
                            <th scope="row">
                                Date of Registration:
                            </th>
                        <td class="schedule-offset" colspan="2">{{ $manager->created_at}}</td>
                        </tr>
                    </tbody>
                </table>
            @endforeach

        </div>
    </section>

@endsection