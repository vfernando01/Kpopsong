@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Song Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('song.update', $song) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Song Name :</label>
                        <input type="text" class="form-control" name="nameSong" value="{{ $song->nameSong }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Album :</label>
                        <input type="text" class="form-control" value="{{ $song->albumSong }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Year :</label>
                        <input type="text" class="form-control" name="yearSong" value="{{ $song->yearSong }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Singed by :</label>
                        <select class="custom-select" name="singed_by" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($artists as $artist)
                                @if ($song->singed_by == $artist->id) {
                                <option value="{{ $artist->id }}" selected>{{$artist->nameArtist . ' (' . $artist->agencyArtist .')'}}</option>
                                }
                                @else{
                                <option value="{{ $artist->id }}">{{$artist->nameArtist . ' (' . $artist->agencyArtist .')'}}</option>
                                }
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Genre :</label>
                        <input type="text" class="form-control" name="genreSong" value="{{ $song->genreSong }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
