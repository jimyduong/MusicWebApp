@extends('layouts.app')
@section('content')
    <div class="row container mt-5 row justify-content-center">
        <main class="col-9 offset-2 " style="vertical-align: center">
            <h1>Danh sách bài hát của bạn</h1>
            <a href="{{route('songs.create')}}">
                <button class="btn btn-success">Tạo Mới Bài Hát</button>
            </a>
            @if(count($songs) == 0)
                <div class="alert-danger" style="text-align: center">bạn chưa có bài nhạc nào</div>
            @else
                <table class="table table-striped text-center mt-2">
                    <tr>
                        <th>#</th>
                        <th>Tên Bài Hát</th>
                        <th>Ảnh</th>
                        <th>Nghe</th>
                        <th>Chức Năng</th>
                    </tr>

                    @foreach($songs as $key=>$song)
                        <tr>
                            <td>{{++$key}}</td>
                            <td><a href="{{route("songs.play",$song->id)}}">{{$song->name}}</a></td>
                            <td>
                                <img class="play-music" src="{{asset('storage/'.$song->image)}}"
                                     style="width: 50px;height: 50px; border-radius: 50px">
                            </td>
                            <td>
                                <audio src="{{asset("storage/".$song->audio)}}" controls></audio>
                            </td>
                            <td>
                                <a href="{{route('songs.edit',$song->id)}}"><button class="btn btn-outline-primary">
                                        <i class="fa fa-btn fa-edit"></i>
                                    </button>
                                </a>
                                <a href="{{route("songs.delete",$song->id)}}"><button class="btn btn-outline-danger"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa bài hát này?');">
                                        <i class="fa fa-btn fa-ban" ></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </table>
        </main>
    </div>





@endsection
