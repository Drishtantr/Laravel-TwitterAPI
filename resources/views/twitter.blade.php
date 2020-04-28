<html>
    <head>
        <meta charset="utf-8">
        <title>My Twitter App</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary">
            <!-- Navbar content -->
            <h4 class="text-light">Drishtant Twitter</h4>
        </nav>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    @if(!empty($data))
                    @foreach($data as $key=>$tweet)
                    <h5>{{$tweet['text']}}</h5>
                    <p>Likes {{$tweet['favorite_count']}} Retweet {{$tweet['retweet_count']}} </p>
                    {{-- @if(!empty($tweet['extended_entities']['media']))
                        @foreach ($tweet['extended_entities']['media'] as $i)
                            <img src="{{$i['meida_url_https']}}" style="width:20px;">
                        @endforeach
                    @endif --}}
                    <hr>
                    @endforeach
                    @else
                    <p>Oops no tweets</p>
                    @endif
                </div>
            </div>
          </div>

    </body>
</html>