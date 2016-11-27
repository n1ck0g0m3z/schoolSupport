@extends('layouts.app')

@section('content')
<div class="content">
    <div class="col-lg-1 col-md-1 col-xs-1"></div>
    <div class="col-lg-10 col-md-10 col-xs-10">
    <form>
        <div id="checkboxPlace" class="clearfix col-md-2 col-xs-3">
          <label for="checkboxPlace">宛先</label>
          <p>親 子</p>
          <p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  ALL<br><br>
          </p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  浜野 幸男<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  新山 穣<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  野原 さくら<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  矢土 宏政<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  西田 伸太朗<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  本山 仁志<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  本山 仁志<br></p>
        </div><div id="checkboxPlace" class="clearfix col-md-2 col-xs-3">
          <br><br><br><br><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  本山 仁志<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  本山 仁志<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  本山 仁志<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  本山 仁志<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  本山 仁志<br></p><p>
          <input type="checkbox" name="riyu" value="1">   <input type="checkbox" name="riyu" value="2">  本山 仁志<br></p>

        </div>

        <div id="formPlace" class="clearfix col-md-8 col-xs-6">
          <div class="form-group">
            <label for="InputSubject">件名</label>
            <input type="text" class="form-control" id="InputSubject" placeholder="（例）授業参観の件について">
          </div>
          <div class="form-group">
            <label for="InputContents">本文</label>
            <textarea rows="10" cols="60" class="form-control" id="InputContents" placeholder="（例）表題の件ですが..."></textarea>
            <!--
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="本文">
            -->
          </div>
          <div class="form-group">
            <label for="exampleInputFile">添付ファイル</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block"></p>
          </div>
          <button type="submit" class="btn btn-default">送信</button>  
        </div>
      </div>
    </form>
    </div>
    <div class="col-lg-1"></div>
</div>
@endsection