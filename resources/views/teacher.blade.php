@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">ログアウト</button>
          </p>
          <div class="jumbotron">
            <h1>今日もお疲れ様です！</h1>
            <p>担当クラスの生徒、保護者の方向けにメッセージを送ることや教科の成績処理を
            行うことができます</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <h2>担当クラス</h2>
              <p>担当クラスの生徒、保護者に個別メッセージ、全体通知を行うことができます。
              <br>また、行事の参加集計等もできます。</p>
              <p><a type="button" class="btn btn-warning" href="{{ url('/home/teacher') }}">Go!</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-lg-6">
              <h2>教科担当クラス</h2>
              <p>教科担当クラスの生徒のテスト結果、成績を処理することができます。また、課題の配布や提出の管理も行うことができます。</p>
              <p><a type="button" class="btn btn-success" href="{{ url('/home/teacher') }}"> Go!</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        
      </div><!--/row-->

    </div><!--/.container-->

@endsection