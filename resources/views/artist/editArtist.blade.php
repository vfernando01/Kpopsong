@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Artist Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('artist.update', $artist) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Artist Name :</label>
                        <input type="text" class="form-control" name="nameArtist" value="{{ $artist->nameArtist }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Agency :</label>
                        <input class="form-control" value="{{ $artist->agencyArtist }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>How Many Member :</label>
                        <input type="text" class="form-control" name="memberArtist" value="{{ $artist->memberArtist }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Debut Year :</label>
                        <input type="text" class="form-control" name="debutArtist" value="{{ $artist->debutArtist }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
