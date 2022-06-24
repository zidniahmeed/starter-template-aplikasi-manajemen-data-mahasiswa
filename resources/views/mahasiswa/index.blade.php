@extends('layout.main')
@section('title', 'mahasiswa')
@section('heading', 'mahasiswa')

@section('table')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        mahasiswa
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tbody>
        </table>
    </div>
</div>
@endsection