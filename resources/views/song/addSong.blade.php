@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Insert Song Data</h1>
        </div>
        {{-- {{ dd($mentors) }} --}}
        <div class="row">
            <div class="col">
                <form action="{{ route('song.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Song Name :</label>
                        <input type="text" class="form-control" name="nameSong" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Album :</label>
                        <input type="text" class="form-control" name="albumSong" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Year :</label>
                        <input type="text" class="form-control" name="yearSong" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Singed by :</label>
                        <select class="custom-select" name="singed_by" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($artists as $artist)
                                <option value="{{ $artist->id }}">{{$artist->nameArtist . ' (' . $artist->agencyArtist .')'}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Genre :</label>
                        <input type="text" class="form-control" name="genreSong" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
