    @extends('layouts.app')
    
    @section('content')
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-md-5 col-lg-5">
          <img class="img-circle" src="data:image/jpeg;base64,{{ base64_encode($user->profile['img']) }}" alt="Generic placeholder image" width="250" height="250">
          <br><br>
          <p>{{ $user->profile->first_kana . '  ' .$user->profile->last_kana }}</p>
          <h3>{{$user->profile->first_name . '  ' .$user->profile->last_name}}</h3>
          <h3>クラス: {{ $user->profile->cls  }}</h3>
          <h3>担任：{{ $user->profile->teacher_name  }}</h3>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-4 col-lg-4">
          <img class="img-circle" src="https://image.freepik.com/free-icon/no-translate-detected_318-359.jpg" alt="Generic placeholder image" width="250" height="250">
          <h2>出席率</h2>
          <h3>90%</h3>
        </div><!-- /.col-lg-4 -->
        <div class="col-md-2 col-lg-2">
          <img class="img-circle" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRo8q9WckYF361OvCiOW3NUXITwM2fRskKEuzbkBUkKAmFifIOX" alt="Generic placeholder image" width="250" height="250">
          <h2>テスト推移</h2>
           <p><a class="btn btn-lg btn-warning" href="{{ url('/mailbox/sensei') }}" role="button">先生にメッセージ</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      @foreach ($json as $news)
          <hr class="featurette-divider border-hr">
          <div class="row featurette">
            <div class="col-md-12">
              <h2 class="featurette-heading">{{ $news->testName }}</h2>
              <p class="lead">{{ $news->attendance }}</p>
              @if($news->testPoint)
              <p class="lead">出席率：　{{ $news->testPoint }}</p>
              @endif
              @if($news->grade)
              <p class="lead">成績：　{{ $news->grde }}</p>
              @endif
            </div>
            @if($news->file)
            <div class="col-md-4">
              <img src="data:image/jpeg;base64,{{ base64_encode($news['file']) }}" class="img-responsive" width="500" height="500">
            </div>
            @endif
            <div class="col-md-3">
              <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="{{ $news->created_at }}">
            </div>
          </div>
      @endforeach
      <hr class="featurette-divider border-hr">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">授業参観の出欠席を回答してください</h2>
          <p class="lead">来月、12月9日に開催されます授業参観の出欠席の回答をお願いします。
          回答期限は11月28日までにお願いします。</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="2016年11月26日　19時06分">
        </div>
      </div>

      <hr class="featurette-divider border-hr">

      <div class="row featurette">
        <div class="col-md-12">
          <h2 class="featurette-heading">先日の体育祭の写真です</h2>
        </div>
          <div class="col-md-4">
          <img src="http://www.osaka-c.ed.jp/toneyama/images/photo/taiiku02.jpg" class="img-responsive" >
          </div>
          <div class="col-md-3">
             <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="2016年11月23日　17時10分">
          </div>
        </div>
         
      </div>

     
      <hr class="featurette-divider border-hr">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

@endsection