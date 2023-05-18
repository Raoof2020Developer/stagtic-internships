@extends('layouts.main')

@section('title', 'Create New Certification')

@section('content')
    <section class="section col-md-8 bg-body p-5 border m-auto">
        <h3 class="text-center mb-3">New Certification</h3>
        <form action="{{route('certificates.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="certificationKey" class="mb-2 mt-4">Certificate's Key:</label>
                <input type="text" id="certificationKey" name="certificate_key" placeholder="Enter Key..." class="form-control">
            </div>

            <div class="form-group">
                <label for="certifiedStudent" class="mb-2 mt-4">Certificied Student:</label>
                <select type="text" id="certifiedStudent" name="id_student"  class="form-control">
                    <option selected disabled>- Choose Student -</option>
                    @foreach($students as $student)
                    <option value="{{$student->id_student}}">{{$student->first_name_student}} {{$student->last_name_student}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="internship" class="mb-2 mt-4">Internship:</label>
                <select type="text" id="internship" name="id_internship"  class="form-control">
                    <option selected disabled>- Choose Internship -</option>
                    @foreach($internships as $internship)
                    <option value="{{$internship->id_internship}}">{{$internship->internship_theme}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="headOfDepartment" class="mb-2 mt-4">Head Of Department:</label>
                <select type="text" id="headOfDepartment" name="id_head_of_department"  class="form-control">
                    <option selected disabled>- Choose Head Of Department -</option>
                    @foreach($heads_of_departments as $head_of_department)
                    <option value="{{$head_of_department->id_head_of_department}}">{{$head_of_department->first_name_head_of_department . ' ' . $head_of_department->last_name_head_of_department  }} </option>
                    @endforeach
                </select>
            </div>

            <input type="text" hidden name="id_internship_supervisor" value="{{ $internship_supervisor_id }}">

            <div class="form-group d-flex flex-row-reverse my-4 gap-2">
                <button class="btn btn-primary" type="submit">Create</button>
                <button class="btn btn-light border">Cancel</button>
            </div>

        </form>
    </section>
@endsection