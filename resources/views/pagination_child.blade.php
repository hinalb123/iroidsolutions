@foreach($data as $val)

<div class="portfolio app" data-cat="app" style="display: inline-block;" data-bound="">
    <div class="blog-card">
        <div class="blog-img">
            <img src="{{url(Storage::url($val->thumbnail))}}" alt="Blog">
        </div>
        <h3>{{$val->title}}</h3>
        <ul class="justify-content-start ms-2">
            <li><img src="assets/images/admin.svg" alt="admin">{{$val->blogusers->username}}</li>
            <li><img src="assets/images/date.svg" alt="date"> {{$val->blogdate}}</li>
        </ul>
        <p>{!! $val->description !!}</p>
        <a href="#" class="btn">Read More <img src="assets/images/next.svg" alt="Next"></a>
    </div>
   
</div>
@endforeach

{!! $data->render() !!}

