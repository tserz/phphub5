<footer class="footer">
      <div class="container">
        <div class="row footer-top">

          <div class="col-sm-5 col-lg-5">

              <p class="padding-top-xsm">口语汇，记录、分享、成长。</p>

              <div class="text-md " >
                  <a class="popover-with-html" data-content="反馈问题" target="_blank" style="padding-right:8px" href="mailto:support@kouyuhui.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                  <a class="popover-with-html" data-content="扫码关注微信订阅号：「口语汇」" target="_blank" style="padding-right:8px" href="https://dn-phphub.qbox.me/uploads/images/201612/15/1/MGig6IACCQ.png"><i class="fa fa-weixin" aria-hidden="true"></i></a>
              </div>
              <br>
              <span style="font-size:0.9em">
                  Powered by <a href="https://github.com/summerblue/phphub5" target="_blank" style="color:inherit">PHPHub</a>
              </span>
          </div>

          <!--
          <div class="col-sm-6 col-lg-6 col-lg-offset-1">

              <div class="row">
                <div class="col-sm-4">
                  <h4>赞助商</h4>
                  <ul class="list-unstyled">
                      @if(isset($banners['footer-sponsor']))
                          @foreach($banners['footer-sponsor'] as $banner)
                              <a href="{{ $banner->link }}" target="_blank"><img src="{{ $banner->image_url }}" class="popover-with-html footer-sponsor-link" width="98" data-placement="top" data-content="{{ $banner->title }}"></a>
                          @endforeach
                      @endif
                  </ul>
                </div>

                  <div class="col-sm-4">
                    <h4>{{ lang('Site Status') }}</h4>
                    <ul class="list-unstyled">
                        <li>{{ lang('Total User') }}: {{ $siteStat->user_count }} </li>
                        <li>{{ lang('Total Topic') }}: {{ $siteStat->topic_count }} </li>
                        <li>{{ lang('Total Reply') }}: {{ $siteStat->reply_count }} </li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <h4>其他信息</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('sites.index') }}"><i class="fa fa-globe text-md"></i> 推荐网站</a></li>
                        <li><a href="/about"><i class="fa fa-info-circle" aria-hidden="true"></i> 关于我们</a></li>
                        <li><a href="{{ route('hall_of_fames') }}"><i class="fa fa-star" aria-hidden="true"></i> {{ lang('Hall of Fame') }}</a></li>
                        <li><a href="http://estgroupe.com/tickets/create"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 技术合作</a></li>
                    </ul>
                  </div>

                </div>

          </div>
          -->
        </div>
        <br>
        <br>
      </div>
    </footer>
