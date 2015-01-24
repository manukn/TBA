@extends('layout.master')
@section('head')
    {{HTML::style('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}
    {{HTML::script('assets/js/pace.min.js')}}
    {{HTML::style('assets/plugins/css/pace.css')}}

@stop


@section('page')

    <ul class="breadcrumb">
        <li>
            <p>HOME</p>
        </li>
        <li><a href="#" class="active">Support</a></li>
    </ul>
    <div class="pull-right actions">
        <button class="btn btn-danger btn-cons" type="button" id="btn-new-ticket">New Ticket</button>
    </div>

















    <div id="morphsearch" class="morphsearch">
        <form class="morphsearch-form">
            <input class="morphsearch-input" type="search" placeholder="Search..."/>
            <button class="morphsearch-submit" type="submit">Search</button>
        </form>
        <div class="morphsearch-content">
            <div class="dummy-column">
                <h2>People</h2>
                <a class="dummy-media-object" href="http://twitter.com/SaraSoueidan">
                    <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
                    <h3>Sara Soueidan</h3>
                </a>
                <a class="dummy-media-object" href="http://twitter.com/rachsmithtweets">
                    <img class="round" src="http://0.gravatar.com/avatar/48959f453dffdb6236f4b33eb8e9f4b7?s=50&d=identicon&r=G" alt="Rachel Smith"/>
                    <h3>Rachel Smith</h3>
                </a>
                <a class="dummy-media-object" href="http://www.twitter.com/peterfinlan">
                    <img class="round" src="http://0.gravatar.com/avatar/06458359cb9e370d7c15bf6329e5facb?s=50&d=identicon&r=G" alt="Peter Finlan"/>
                    <h3>Peter Finlan</h3>
                </a>
                <a class="dummy-media-object" href="http://www.twitter.com/pcridesagain">
                    <img class="round" src="http://1.gravatar.com/avatar/db7700c89ae12f7d98827642b30c879f?s=50&d=identicon&r=G" alt="Patrick Cox"/>
                    <h3>Patrick Cox</h3>
                </a>
                <a class="dummy-media-object" href="https://twitter.com/twholman">
                    <img class="round" src="http://0.gravatar.com/avatar/cb947f0ebdde8d0f973741b366a51ed6?s=50&d=identicon&r=G" alt="Tim Holman"/>
                    <h3>Tim Holman</h3>
                </a>
                <a class="dummy-media-object" href="https://twitter.com/shaund0na">
                    <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
                    <h3>Shaun Dona</h3>
                </a>
            </div>
            <div class="dummy-column">
                <h2>Popular</h2>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/08/05/page-preloading-effect/">
                    <img src="img/thumbs/PagePreloadingEffect.png" alt="PagePreloadingEffect"/>
                    <h3>Page Preloading Effect</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/05/28/arrow-navigation-styles/">
                    <img src="img/thumbs/ArrowNavigationStyles.png" alt="ArrowNavigationStyles"/>
                    <h3>Arrow Navigation Styles</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/06/19/ideas-for-subtle-hover-effects/">
                    <img src="img/thumbs/HoverEffectsIdeasNew.png" alt="HoverEffectsIdeasNew"/>
                    <h3>Ideas for Subtle Hover Effects</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/07/14/freebie-halcyon-days-one-page-website-template/">
                    <img src="img/thumbs/FreebieHalcyonDays.png" alt="FreebieHalcyonDays"/>
                    <h3>Halcyon Days Template</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/05/22/inspiration-for-article-intro-effects/">
                    <img src="img/thumbs/ArticleIntroEffects.png" alt="ArticleIntroEffects"/>
                    <h3>Inspiration for Article Intro Effects</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/06/26/draggable-dual-view-slideshow/">
                    <img src="img/thumbs/DraggableDualViewSlideshow.png" alt="DraggableDualViewSlideshow"/>
                    <h3>Draggable Dual-View Slideshow</h3>
                </a>
            </div>
            <div class="dummy-column">
                <h2>Recent</h2>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/10/07/tooltip-styles-inspiration/">
                    <img src="img/thumbs/TooltipStylesInspiration.png" alt="TooltipStylesInspiration"/>
                    <h3>Tooltip Styles Inspiration</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/23/animated-background-headers/">
                    <img src="img/thumbs/AnimatedHeaderBackgrounds.png" alt="AnimatedHeaderBackgrounds"/>
                    <h3>Animated Background Headers</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/16/off-canvas-menu-effects/">
                    <img src="img/thumbs/OffCanvas.png" alt="OffCanvas"/>
                    <h3>Off-Canvas Menu Effects</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/02/tab-styles-inspiration/">
                    <img src="img/thumbs/TabStyles.png" alt="TabStyles"/>
                    <h3>Tab Styles Inspiration</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/08/19/making-svgs-responsive-with-css/">
                    <img src="img/thumbs/ResponsiveSVGs.png" alt="ResponsiveSVGs"/>
                    <h3>Make SVGs Responsive with CSS</h3>
                </a>
                <a class="dummy-media-object" href="http://tympanus.net/codrops/2014/07/23/notification-styles-inspiration/">
                    <img src="img/thumbs/NotificationStyles.png" alt="NotificationStyles"/>
                    <h3>Notification Styles Inspiration</h3>
                </a>
            </div>
        </div><!-- /morphsearch-content -->
        <span class="morphsearch-close"></span>
    </div><!-- /morphsearch -->







    <div class="overlay"></div>











































































    <div class="page-title">
        <h1><i class="fa fa-arrow-circle-left"></i>Support</h1>

        <div class="row form-row">
            <div class="col-md-12">
                @if (Session::get('error'))

                    <div class="alert alert-error alert-danger">
                        @if (is_array(Session::get('error')))
                            {{ head(Session::get('error')) }}
                        @endif
                    </div>
                @endif

                @if (Session::get('notice'))
                    <div class="alert">{{ Session::get('notice') }}</div>
                @endif
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple transparent" id="new-ticket-wrapper" style="display:none">
                <div class="grid-title no-border">
                    <h4 class="semi-bold">How can we help you?</h4>
                </div>
                <div class="grid-body">
                    <form class="" method="POST" id="new-ticket-form"
                          action="{{{ URL::to('/profile/'.$user->username.'/ticket') }}}">
                        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

                        <div class="row form-row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Subject" class="form-control" id="Subject"
                                       name="Subject" value="{{{ Input::old('Subject') }}}">
                            </div>
                            <div class="col-md-3">
                                <input type="text" placeholder="Product" class="form-control" id="Product_id"
                                       name="Product_id">
                            </div>
                            <div class="col-md-3">
                                <input type="text" placeholder="Purchase ID" class="form-control" id="Purchase_id"
                                       name="Purchase_id">
                            </div>
                        </div>
                        <div class="row form-row">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="10" id="Description" name="Description"
                                          value="{{{ Input::old('Subject') }}}"></textarea>
                            </div>
                        </div>
                        <div class="row form-row h-align-middle">
                            <div class="col-md-12 ">
                                {{ Form::captcha(array('theme' => 'plain')) }}
                            </div>

                        </div>
                        <div class="row form-row">
                            <div class="col-md-12 margin-top-10">
                                <div class="pull-left">
                                    <div class="checkbox checkbox check-success"> &nbsp;
                                        <input type="checkbox" id="checkbox1" value="1" name="terms">
                                        <label for="checkbox1">I Here by agree on the Term and
                                            condition. </label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-cons" type="button" id="btn-close-ticket">Close
                                    </button>
                                    <button class="btn btn-primary btn-cons" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h4>Open <span class="semi-bold">Tickets</span></h4>
    <br>

    <div class="row">
        @foreach($tickets as $ticket)
            <div class="col-md-12">
                <div class="box simple no-border">
                    <div class="box-title no-border descriptive clickable">
                        <h4 class="semi-bold">{{ $ticket->Subject }}</h4>

                        <p><span class="text-success bold">Ticket #{{ $ticket->prefix }}{{ $ticket->id }}</span> -
                            Created on {{ $ticket->created_at}}&nbsp;&nbsp;<span
                                    class="label label-important">ALERT</span></p>

                        <div class="actions"><a class="view" href="javascript:;"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="box-body  no-border" style="display:none">
                        <div class="post">
                            <div class="user-profile-pic-wrapper">
                                <div class="user-profile-pic-normal"><img width="35" height="35"
                                                                          data-src-retina="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                          data-src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                          src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                          alt=""></div>
                            </div>
                            <div class="info-wrapper">
                                <div class="info"> {{ $ticket->Description }} </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <br>

                        <div class="form-actions">
                            <div class="post col-md-12">
                                <div class="user-profile-pic-wrapper">
                                    <div class="user-profile-pic-normal"><img width="35" height="35"
                                                                              data-src-retina="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                              data-src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                              src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJtYWxlMyIgdmVyc2lvbj0iMS4xIiB2aWV3Qm94PSItMjcgMjQgMTAwIDEwMCIgd2lkdGg9IjEwMHB4IiB4bWw6c3BhY2U9InByZXNlcnZlIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PGc+PGc+PGNpcmNsZSBjeD0iMjMiIGN5PSI3NCIgZmlsbD0iI0Y1RUVFNSIgcj0iNTAiLz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iU1ZHSURfMV8iIHI9IjUwIi8+PC9kZWZzPjxjbGlwUGF0aCBpZD0iU1ZHSURfMl8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNTVkdJRF8xXyIvPjwvY2xpcFBhdGg+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzJfKSIgZD0iTTM4LDk5LjlsMjcuOSw3LjdjMy4yLDEuMSw1LjcsMy41LDcuMSw2LjZ2OS44SC0yN3YtOS44ICAgICAgYzEuMy0zLjEsMy45LTUuNSw3LjEtNi42TDgsOTkuOVY4NWgzMFY5OS45eiIgZmlsbD0iI0U2QzE5QyIvPjxnIGNsaXAtcGF0aD0idXJsKCNTVkdJRF8yXykiPjxkZWZzPjxwYXRoIGQ9Ik0zOCw5OS45bDI3LjksNy43YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOGMxLjMtMy4xLDMuOS01LjUsNy4xLTYuNkw4LDk5LjlWODVoMzBWOTkuOXoiIGlkPSJTVkdJRF8zXyIvPjwvZGVmcz48Y2xpcFBhdGggaWQ9IlNWR0lEXzRfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjU1ZHSURfM18iLz48L2NsaXBQYXRoPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0tMjcsODJINzN2NDJILTI3VjgyeiBNMjMsMTEyYzExLDAsMjAtNi4zLDIwLTE0cy05LTE0LTIwLTE0UzMsOTAuMywzLDk4ICAgICAgIFMxMiwxMTIsMjMsMTEyeiIgZmlsbD0iI0U2QTQyMiIvPjxwYXRoIGNsaXAtcGF0aD0idXJsKCNTVkdJRF80XykiIGQ9Ik0yMywxMDJjLTEuNywwLTMuOS0wLjQtNS40LTEuMWMtMS43LTAuOS04LTYuMS0xMC4yLTguMyAgICAgICBjLTIuOC0zLTQuMi02LjgtNC42LTEzLjNjLTAuNC02LjUtMi4xLTI5LjctMi4xLTM1YzAtNy41LDUuNy0xOS4yLDIyLjEtMTkuMmwwLjEsMGwwLDBsMCwwbDAuMSwwICAgICAgIGMxNi41LDAuMSwyMi4xLDExLjcsMjIuMSwxOS4yYzAsNS4zLTEuNywyOC41LTIuMSwzNWMtMC40LDYuNS0xLjgsMTAuMi00LjYsMTMuM2MtMi4xLDIuMy04LjQsNy40LTEwLjIsOC4zICAgICAgIEMyNi45LDEwMS42LDI0LjcsMTAyLDIzLDEwMkwyMywxMDJ6IiBmaWxsPSIjRDRCMDhDIi8+PHBhdGggY2xpcC1wYXRoPSJ1cmwoI1NWR0lEXzRfKSIgZD0iTTIzLDgyQzEwLjMsODIsMCw4OS40LDAsOTguNVMxMC4zLDExNSwyMywxMTVzMjMtNy40LDIzLTE2LjUgICAgICAgUzM1LjcsODIsMjMsODJ6IE0yMywxMTFjLTEwLjUsMC0xOS02LTE5LTEzLjVTMTIuNSw4NCwyMyw4NHMxOSw2LDE5LDEzLjVTMzMuNSwxMTEsMjMsMTExeiIgZmlsbD0iI0Q5OEMyMSIvPjwvZz48L2c+PHBhdGggZD0iTTIzLDk4Yy0xLjUsMC0zLjUtMC4zLTQuOC0wLjljLTEuNi0wLjctNy4yLTQuNi05LjEtNi4zYy0yLjUtMi4zLTMuOC01LjEtNC4yLTEwUzMsNTguNSwzLDU0LjUgICAgIEMzLDQ4LjgsOC4xLDQwLDIzLDQwbDAsMGwwLDBsMCwwbDAsMEMzNy45LDQwLDQzLDQ4LjgsNDMsNTQuNWMwLDQtMS41LDIxLjUtMS45LDI2LjRzLTEuNiw3LjctNC4yLDEwYy0xLjksMS43LTcuNiw1LjYtOS4xLDYuMyAgICAgQzI2LjUsOTcuNywyNC41LDk4LDIzLDk4TDIzLDk4eiIgZmlsbD0iI0YyQ0VBNSIvPjxwYXRoIGQ9Ik0zMCw4NS41Yy0xLjksMi01LjIsMy04LjEsMi40Yy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9IiNBMzcwNUYiLz48cGF0aCBkPSJNMzAsODUuNWMtMS45LDItNS4yLDMtOC4xLDIuNCAgICAgYy0yLjctMC42LTQuNy0yLTUuNy00LjNMMzAsODUuNXoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0EzNzA1RiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+PGc+PGRlZnM+PHJlY3QgaGVpZ2h0PSI1IiBpZD0iU1ZHSURfNV8iIHdpZHRoPSIzMSIgeD0iNyIgeT0iNjUiLz48L2RlZnM+PGNsaXBQYXRoIGlkPSJTVkdJRF82XyI+PHVzZSBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI1NWR0lEXzVfIi8+PC9jbGlwUGF0aD48Y2lyY2xlIGNsaXAtcGF0aD0idXJsKCNTVkdJRF82XykiIGN4PSIzMiIgY3k9IjY5IiBmaWxsPSIjMjkxRjIxIiByPSIyIi8+PGNpcmNsZSBjbGlwLXBhdGg9InVybCgjU1ZHSURfNl8pIiBjeD0iMTQiIGN5PSI2OSIgZmlsbD0iIzI5MUYyMSIgcj0iMiIvPjwvZz48cGF0aCBkPSJNOCw2NmMwLDAsMS4xLTMsNi4xLTNjMy40LDAsNS40LDEuNSw2LjQsMyIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQ0M5ODcyIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNMzguMSw2NmMwLDAtMS4xLTMtNi4xLTNjLTQuOCwwLTcsMy03LDVjMCwxLjksMCw5LDAsOSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjQkI4NjYwIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNDEuOCw3Mi4yYzAsMCwwLjgtNi4zLDMuNy03LjJjMC40LTEuOCwxLjUtNywxLjUtOS45cy0wLjMtNS43LTEuOS04LjFjLTEuOC0yLjYtNS42LTQuMS03LjYtNC4xICAgICBjLTIuMywxLjQtNy43LDQuNi05LjQsNi41Yy0wLjksMSwwLjQsMS44LDAuNCwxLjhzMS4yLTAuNSwxLjctMC42YzIuNS0wLjcsOC0xLjIsOS43LDEuM0M0Miw1NC45LDQyLDYzLjcsNDIsNjUgICAgIEM0Miw2Ni4yLDQxLjgsNzIuMiw0MS44LDcyLjJ6IiBmaWxsPSIjNDUyMjI4Ii8+PHBhdGggZD0iTTAuNSw2NWMyLjksMSwzLjcsNy4yLDMuNyw3LjJTNCw2Ni4yLDQsNjVjMC0xLjYsMC4yLTkuMSwzLjQtMTIuN2MzLjYtNCw4LjQtNS4zLDExLjEtMy41ICAgICBjMS40LDAuOSw2LjEsNS41LDExLjEsMS43YzMtMi4zLDguNS03LjUsOC41LTcuNXMtMi45LTguOS0xNi4xLTcuOWMtNS42LDAuNS0xMS44LTAuOS0xMS44LTAuOXMtMC4xLDIuNSwwLjksMy44ICAgICBDMi44LDQwLjQsMC4xLDQ2LjQtMC43LDUxYy0wLjIsMC45LTAuMywxLjgtMC4zLDIuN2MwLDAuNSwwLDEsMCwxLjRDLTEsNTgsMC4xLDYzLjEsMC41LDY1eiIgZmlsbD0iIzZCMzYzRSIvPjwvZz48L2c+PC9zdmc+"
                                                                              alt=""></div>
                                </div>
                                <div class="info-wrapper">
                                    <div class="info"> Hi,<br>
                                        <br>
                                        Thank you for reaching us, We are looking into this issue and will update
                                        you.<br>
                                        <br>
                                        Alex<br>
                                        <hr>
                                        <p>Posted on 10/29/13 at 07:21</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"><i class="fa fa-reply"></i>&nbsp;Amount</label>

                                        <div class="input-with-icon  right"><i class=""></i>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        @endforeach


    </div>

    <div class="row">
        <div class="col-md-12">

                {{ $tickets->links() }}
        </div>
    </div>














@stop
@section('javascript')
    {{HTML::script('assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}
    {{HTML::script('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}
    {{HTML::script('assets/js/form_elements.js')}}
    {{HTML::script('assets/js/support_ticket.js')}}

    <script>

        $('.view').on('click', function () {

            var el = jQuery(this).parents(".box").children(".box-body");
            if (jQuery(this).hasClass("expand")) {
                jQuery(this).removeClass("expand");


                el.slideUp(200);
            } else {
                jQuery(this).removeClass("collapse").addClass("expand");
                el.slideDown(200);
            }
        });

    </script>


@stop

