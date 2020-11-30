@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Artist List</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('artist.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Add Artist</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Artist Name</th>
                    <th scope="col">Agency</th>
                    <th scope="col">How Many Members</th>
                    <th scope="col">Debut Year</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                {{-- {{ dd($mentors) }} --}}
                @foreach($artists as $artist)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                        <td><a href="{{ route('artist.edit', $artist) }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{ $artist->nameArtist }}</a></td>
                        <td>{{ $artist->agencyArtist }}</td>
                        <td>{{ $artist->memberArtist }}</td>
                        <td>{{ $artist->debutArtist }}</td>
                        <td>{{ $artist->updated_at}}</td>
                        <td>{{ $artist->created_at}}</td>
                        <td>
                            <form action="{{ route('artist.destroy', $artist) }}" method="post" onsubmit="return confirm('Are you sure? all the related data will also be deleted!')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onmouseover="this.style.boxShadow='0px 0px 15px HotPink'" onmouseout="this.style.boxShadow='0px 0px 0px HotPink'">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
