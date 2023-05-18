@extends('layouts.main')

@section('title', 'Certificates')

@section('content')
    <section class="certificates section">
        <a href="{{route('certificates.create')}}" role="button" class="btn btn-primary">
            Create New Certificate
            <i class="bi bi-plus fs-5"></i>
        </a>

        <hr class="py-3">

        <table class="table table-striped">
            <thead>
                <tr class="lead my-2">
                    <th>Certificate ID</th>
                    <th>Certificate Key</th>
                    <th>Student Certified Name</th>
                    <th>Head Of Department</th>
                    <th>Internship</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>
                @foreach($certificates as $certificate)
                <tr>
                    <td>{{$certificate->id}}</td>
                    <td>
                        <a style="text-decoration: underline" href="{{route('certificates.show', $certificate->certificate_key)}}">
                            {{$certificate->certificate_key}}
                        </a>
                    </td>
                    <td>{{App\Models\Student::find($certificate->id_student)->first_name_student}}</td>
                    <td>{{App\Models\HeadOfDepartment::find($certificate->id_head_of_department)->first_name_head_of_department}}</td>
                    <td>{{App\Models\Internship::find($certificate->id_internship)->internship_theme }}</td>
                    <td class="d-flex gap-2">
                        <form action="{{route('certificates.delete', $certificate->certificate_key)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                        </form>
                        <a href="{{route('certificates.show', $certificate->certificate_key)}}" class="btn btn-primary" role="button">Print</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection