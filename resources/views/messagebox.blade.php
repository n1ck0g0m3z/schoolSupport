@extends('layouts.app')

@section('content')
    {{ Html::style('css/style.css') }}
    <div class="bg container">
		<div id="mainMassage" class="col-sm-6">
    <div class="sys-newmail"><section class="content-mod mail-mod">
    <div class="mod-header">
    <h1 class="mod-headline">メッセージ</h1>
    <p class="alert-text sys-emergency" style="display:none;">
    <span class="icon-urgent-small icon"></span><b>緊急メールがあります!</b>
    </p>
    <div class="mod-header-menu js-rollover-btn sys-hover-btn sys-link-create">
    <span class="btn-text sys-mail-create-btn">新規メッセージ</span>
    <ul class="js-rollover-area sys-mail-message-area" style="display: none; height: 245px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
    <li class="sys-message-type-0"><a href="/mail_creates/108705/12236159#new/0" class="sys-myteam-link">・ 通常メール</a></li>
    <li><a href="/mail_creates/108705/12236159#new/1" class="sys-myteam-link">・ 読了確認</a></li>
    <li><a href="/mail_creates/108705/12236159#new/2" class="sys-myteam-link">・ 出欠確認</a></li>
    <li><a href="/mail_creates/108705/12236159#new/3" class="sys-myteam-link">・ 賛否確認</a></li>
    <li><a href="/mail_creates/108705/12236159#new/5" class="sys-myteam-link">・ アンケート</a></li>
    <li><a href="/mail_creates/108705/12236159#new/11" class="sys-myteam-link">・ 日程調整</a></li>
    <li class="sys-message-type-20"><a href="/mail_creates/108705/12236159#new/20" class="sys-myteam-link">・ 安否確認</a></li>
    </ul>
    </div>
    </div>
    <div class="mod-cont">
    <div class="mod-section last sys-data"><table class="def-table-list used-anchor sys-list">
    <colgroup><col class="icon-cell">
    <col class="table-cell">
    <col class="label-cell">
    <col class="icon-cell">
    <col class="date-cell">
    <col class="time-cell">
    <col class="hidden-anchor">
    </colgroup><tbody><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display: block;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display:none;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">本山 仁志</span>
    </td>
    <td class="label-cell">
    
    
    <span class="label-base label-attention sys-noresponce">未返信</span>
    
    
    
    </td>
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/24</td>
    <td class="time-cell">14:15</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/69064239" class="sys-href"></a></td></tr><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display:none;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display:none;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display: block;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">浜野 幸男</span>
    </td>
    <td class="label-cell">
    
    <span class="label-base label-attention sys-noresponce">未返信</span>
    
    
    </td>
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/23</td>
    <td class="time-cell">20:49</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/69058194" class="sys-href"></a></td></tr><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display:none;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display: block;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">新山 穣</span>
    </td>
    <td class="label-cell">
    
    
    </td>
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/20</td>
    <td class="time-cell">20:22</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/69024602" class="sys-href"></a></td></tr><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display: block;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display:none;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">野原 さくら</span>
    </td>
    <td class="label-cell">
    
    
    
    
    </td>
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/20</td>
    <td class="time-cell">19:01</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/69023699" class="sys-href"></a></td></tr><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display:none;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display: block;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">矢土 宏政</span>
    </td>
    <td class="label-cell">
    
    
    
    
    </td>
    
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/18</td>
    <td class="time-cell">11:34</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/68992915" class="sys-href"></a></td></tr></tbody></table>
    <div class="mod-section-footer sys-see-more">
    <p class="see-more"><a href="/mails/108705/12236159" class="detail-anchor sys-myteam-link">一覧へ</a></p>
    </div></div>
    </div>
    </section></div>
    		</div>
    		
    <div id="mainSend" class="col-sm-6">
    <div class="sys-newmail"><section class="content-mod mail-mod">
    <div class="mod-header">
    <h1 class="mod-headline">送信履歴	</h1>
    <p class="alert-text sys-emergency" style="display:none;">
    <span class="icon-urgent-small icon"></span><b>緊急メールがあります!</b>
    </p>
    <div class="mod-header-menu js-rollover-btn sys-hover-btn sys-link-create">
    
    @if(\Auth::User()->permission != 0)
    {{Form::open(['url' => '/mailbox/sensei'])}}
    @else
    {{Form::open(['url' => '/mailbox/new'])}}
    @endif
    <p class="ellipsis sys-title">新規メール作成</p>
    <p>
    <SELECT name="massageType">
    <OPTION value="nomal">通常メール</OPTION>
    <OPTION value="check">出欠確認</OPTION>
    <OPTION value="question">課題</OPTION>
    <OPTION value="warn">警告</OPTION><br>
    <input type="submit" value="作成">
    </SELECT>
    </p>
    {{Form::close()}}
    
    
    <ul class="js-rollover-area sys-mail-message-area" style="display: none; height: 245px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
    <li class="sys-message-type-0"><a href="/mail_creates/108705/12236159#new/0" class="sys-myteam-link">・ 通常メール</a></li>
    <li><a href="/mail_creates/108705/12236159#new/1" class="sys-myteam-link">・ 読了確認</a></li>
    <li><a href="/mail_creates/108705/12236159#new/2" class="sys-myteam-link">・ 出欠確認</a></li>
    <li><a href="/mail_creates/108705/12236159#new/3" class="sys-myteam-link">・ 賛否確認</a></li>
    <li><a href="/mail_creates/108705/12236159#new/5" class="sys-myteam-link">・ アンケート</a></li>
    <li><a href="/mail_creates/108705/12236159#new/11" class="sys-myteam-link">・ 日程調整</a></li>
    <li class="sys-message-type-20"><a href="/mail_creates/108705/12236159#new/20" class="sys-myteam-link">・ 安否確認</a></li>
    </ul>
    </div>
    </div>
    <div class="mod-cont">
    <div class="mod-section last sys-data"><table class="def-table-list used-anchor sys-list">
    <colgroup><col class="icon-cell">
    <col class="table-cell">
    <col class="label-cell">
    <col class="icon-cell">
    <col class="date-cell">
    <col class="time-cell">
    <col class="hidden-anchor">
    </colgroup><tbody><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display: block;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display:none;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">【警告】西田 伸太朗[親]　校内での暴力行為について</span>
    </td>
    <td class="label-cell">
    
    
    
    
    </td>
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/23</td>
    <td class="time-cell">18:32</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/69064239" class="sys-href"></a></td></tr><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display:none;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display:none;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display: block;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">【出欠確認】ALL[親]　12/9(金)の授業参観について</span>
    </td>
    <td class="label-cell">
    
    
    </td>
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/20</td>
    <td class="time-cell">20:12</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/69058194" class="sys-href"></a></td></tr><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display:none;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display: block;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">【通常メール】新山 穣[子][親]　陸上部 関東大会について</span>
    </td>
    <td class="label-cell">
    
    
    
    </td>
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/20</td>
    <td class="time-cell">19:53</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/69024602" class="sys-href"></a></td></tr><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display: block;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display:none;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">【課題】ALL[子][親]　進路希望調査</span>
    </td>
    <td class="label-cell">
    
    
    
    
    </td>
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/20</td>
    <td class="time-cell">19:51</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/69023699" class="sys-href"></a></td></tr><tr><td class="icon-cell">
    <span class="sys-message-type-0   icon-mail-default" style="display:none;"></span>
    <span class="sys-message-type-1   icon-mail-checked" style="display:none;"></span>
    <span class="sys-message-type-2   icon-mail-attend" style="display: block;"></span>
    <span class="sys-message-type-3   icon-mail-goodbad" style="display:none;"></span>
    <span class="sys-message-type-5   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-6   icon-mail-enquete" style="display:none;"></span>
    <span class="sys-message-type-11  icon-mail-schedule" style="display:none;"></span>
    <span class="sys-message-type-15" style="display:none;"></span>
    <span class="sys-message-type-20  icon-mail-safetyconf" style="display:none;"></span>
    <span class="sys-message-type-100 icon-mail-share" style="display:none;"></span>
    <span class="sys-message-type-200" style="display:none;"></span>
    <span class="sys-message-type-pr icon-mail-pr" style="display:none;"></span>
    </td>
    <td class="title-cell">
    <span class="ellipsis sys-title">【通常メール】ALL[親]　今日の一コマ</span>
    
    <span class="label-base label-attention sys-noresponce">添付あり</span>
    </td>
    <td class="label-cell">
    
    
    
    
    </td>
    <td class="icon-cell">
    <span class="sys-attached-file" style="display:none;">
    <i class="fa fa-paperclip fa-2x pull-right"></i>
    </span>
    </td>
    <td class="date-cell">2016/11/20</td>
    <td class="time-cell">19:34</td>
    <td class="hidden-anchor"><a href="/mails/108705/12236159#detail/68992915" class="sys-href"></a></td></tr></tbody></table>
    <div class="mod-section-footer sys-see-more">
    <p class="see-more"><a href="/mails/108705/12236159" class="detail-anchor sys-myteam-link">一覧へ</a></p>
    </div></div>
    </div>
    </section>
        </div>
        </div>
@endsection


