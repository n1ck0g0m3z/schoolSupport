@extends('layouts.app')

@section('content')
  <div class="container">
        <div class="col-lg-5"　 style="margin-top: 30px; font-size: 24px">
          <img src="data:image/jpeg;base64,{{ base64_encode($profile['img']) }}" class="img-circle" width="250" height="250">
          <p>{{ $profile->first_kana . '  ' .$profile->last_kana }}</p>
          <p>{{$profile->first_name . '  ' .$profile->last_name}}</p>
          <p>担任:　{{ $profile->cls }}</p>
         </div>
    
    <div class="col-lg-7">
       <table class="table" style="font-size: 18px;">
      　　　<tr>
           <th>#</th>
           　　　  <th>画像</th>
                <th>名前</th>
                <th>クラス</th>
            </tr>

            </thead>
            <tbody>
              @foreach ($json as $user)
              <tr>
                <th scope="row">{{ $user->id}}</th>
                  <td><a href="/data/{{ $user->id}}"><img src="data:image/jpeg;base64,{{ base64_encode($user->img) }}" class="img-circle" width="50" height="50"></a></td>
                  <td>{{ $user->first_name . '  ' . $user->last_name }}</td>
                  <td>{{ $user->cls }}</td>
              </tr>
              @endforeach
            </tbody>
       　</table>
    </div>
    </div>
@endsection