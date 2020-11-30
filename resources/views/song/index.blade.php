@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Song List</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('song.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Add Song</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Song Name</th>
                    <th scope="col">Album</th>
                    <th scope="col">Year</th>
                    <th scope="col">Singed by</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($songs as $song)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                        <td><a href="{{ route('song.edit', $song) }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{ $song->nameSong }}</a></td>
                        <td>{{ $song->albumSong }}</td>
                        <td>{{ $song->yearSong }}</td>
                        @foreach ($artists as $artist)
                            @if ($song->singed_by == $artist->id)
                                <td>{{ $artist->nameArtist }} ({{$artist->agencyArtist}})</td>
                            @endif
                        @endforeach
                        <td>{{ $song->genreSong }}</td>
                        <td>{{ $song->updated_at}}</td>
                        <td>{{ $song->created_at}}</td>
                        <td>
                            <form action="{{ route('song.destroy', $song) }}" method="post" onsubmit="return confirm('Are you sure? This action cannot be undone!')">
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
